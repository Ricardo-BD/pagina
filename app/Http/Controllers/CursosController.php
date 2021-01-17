<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Models\Cursos;
use App\Models\User;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function show()
    {
        $posts = Cursos::all();
       	if($posts != null){
     		return view('cursos.show',compact('posts'));
     	}	
        
    	return view('cursos.show');
    }

    public function create()
    {
    	return view('cursos.create');
    }

    public function store(Request $request)
    {
        //obtengo y asigno el id del usuario que hizo la publicacion
        $request['user_id'] = \Auth::id();
        $file = $request->file('file');
       //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();
        $id = \Auth::id();
        //creo el directorio para la img
        //$directory = "/images/user_id/$id";
        //\Storage::makeDirectory($directory);

        //guardo la img en el directorio
        //$path = \Storage::disk('public')->putFileAs($directory, $file, $nombre);
        $path = \Storage::disk('public')->put($nombre,$file);
        //ubicacion precisa donde se ubica la img
        $photo = '/storage/'.$path;
        //asigno la ruta de la img a la BD
        $request['image'] = $photo;
        //hago las validaciones correspondientes a los campos de la BD
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required',
            'image' => 'required',
        ]);
        //creo la publicacion y mando los datos a la BD
        $post = Cursos::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'user_id' => \Auth::id(),
            'image' => $photo,
        ]);
        //guardo la img en el directorio
        $path = \Storage::disk('public')->put($nombre, $file);
        $post->save();
        //redirijo a la vista predeterminada home
        $email = \Auth::user()->email;
		Mail::to($email)->send(new EnviarCorreo($post));
        return redirect()->route('cursos')->with('save','save');
    }
}
