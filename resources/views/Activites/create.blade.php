@extends('layouts.main')
@section('content')

{!! Form::open(['action' => 'ActivitesController@store', 'method' => 'post']) !!}
     < <div class="container text-center">
    <b>Theme</b> <select name="theme">
        <option>Theme1</option>
        <option>Theme2</option>
        <option>Theme3</option>
    </select>
    <br><br>
    <b>Type</b> <select name="type">
        <option>TypeA</option>
        <option>TypeC</option>
    </select>
    <br><br>
    <br><br>
    <b>Resume : </b> <textarea name="resume" placeholder="Resume"></textarea><br><br>
    <b>Article : </b> <textarea name="article" placeholder="article"></textarea>
    <br>
    {{Form::submit('Ajouter',['class' =>'btn btn-primary'])}}
</div>
{!! Form::close() !!}

@endsection
