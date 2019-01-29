@extends('superheroes.layout')

@section('content')
   <h1 class="text-center mt-2">Agregar superhéroe</h1>
   <hr>
<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
<div class="container">

@if (count($errors) > 0)
 <div class="alert alert-danger"> 
    <strong>Whoops!</strong> Algunos campos son requeridos
           <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
           </ul>
 </div>
@endif



<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form action={{ route('superheroes.store') }} method="post">
    @csrf
    
     <div class="form-group ">
      <label class="control-label requiredField" for="nombre">
       Nombre
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="nombre"  name="nombre" value ="{{ old('nombre') }}" placeholder="Insertar el nombre" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="poder">
       Poder
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="poder" name="poder" value ="{{ old('poder') }}" placeholder="Inserta el poder" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="creador">
       Creador
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="creador"  name="creador" value ="{{ old('creador') }}" placeholder="Inserta el creador" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="villano">
       Villano
      </label>
      <input class="form-control" id="villano" name="villano" placeholder="Inserta el villano" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Agregar
       </button>
         <a class="btn btn-success float-right" href="{{ route('superheroes.index') }}">Regresar</a>
       </button>
      </div>
     </div>
    </form>
   </div>


   <div class="col-md-6">
   <img  class="img-fluid" width="600" src="{{asset('images/img1.png')}}" alt="">
   </div>
  </div>
 </div>
</div>

</div




@endsection