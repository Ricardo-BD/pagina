@extends('layouts.principal')
@section('content')


<div class="d-flex ff flex-nowrap justify-content-center">
    <div class="row formm1" style="margin: 0em 1em 1em 0em;">
      <div class="col">
      <div class="card mt-4 lore p-4">
      <div class="d-flex justify-content-center ti">
    <h2 class="text-center display-4">Crear Curso</h2>
 </div> 

     {{--  <form method = "POST" action = "" enctype="multipart/form-data" class="d-flex flex-column justify-content-center align-items-center h-100">--}} 
      	<form method = "POST" action = "{{route ('cursos.store',Auth::id())}}" enctype="multipart/form-data">
      		@csrf
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>
  <div class="form-group">
    <label for="description">Descripcion</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <div class="form-group row">
      
            <label class="text-center h5 col-sm-5">{{_('Image/Video:')}}</label>
 
          <div class="col-sm-6 text-center">
            
            
            <input type="file" id="file1"  name="file" id="photoValue"/>
          </div>
            <div class="input-group mt-1">
              <div class="input-group-text " id="uploadFile1" style="visibility: collapse;position: absolute;width: 100px;height: 100%;z-index:1000;">
                  <p class="text-center mb-0">File name:</p>
                    </div>
              <input id="uploadFile" placeholder="Choose File" disabled="disabled" style="display: none;" 
                    class="form-control w-100"/>
            </div>
          </div>
      
        <div class="form-group text-center mb-0 mt-3">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
</form>
 
</div>
</div>
</div>
</div>
<script src="{{asset('public/js/posts.js')}}"></script>
<script src="{{asset('public/js/addPass.js')}}"></script>
<script type="text/javascript">
$("#upfile1").click(function () {
    $("#file1").trigger('click');
});
$value = document.getElementById("uploadFile");
$value2 = document.getElementById("uploadFile1");
document.getElementById("file1").onchange = function () {
  if($value.value != ' '){
    $value.style.display = 'block';
    $value2.style.visibility = 'visible';
    document.getElementById("uploadFile").value = this.value;
  }
 };
</script>





@endsection