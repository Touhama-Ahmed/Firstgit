@extends('layouts.main')
@section('stylesheet')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    @endsection
@section('content')
    <h1 class="text-center">Create Service</h1>
    {!! Form::open(['action' => 'ServicesController@store', 'methode' => 'POST']) !!}
     <div class="container text-center">
      <b>Theme</b> <select name="theme">
                        <option>Theme1</option>
                        <option>Theme2</option>
                        <option>Theme3</option>
                     </select>
         <br><br>
      <b>Intitule : </b> <input type="text" name="intitule" placeholder="Intitule"/><br><br>
      <b>Resume : </b> <textarea name="resume" placeholder="Resume"></textarea><br><br>
      <b>Article : </b> <textarea name="article" placeholder="article"></textarea>
         <br>
      {{Form::submit('Ajouter',['class' =>'btn btn-primary'])}}
     </div>
    {!! Form::close() !!}
@endsection