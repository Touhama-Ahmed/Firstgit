@extends('layouts.main')

@section('content')
    <h1 class="text-center">Services</h1>
                <div class="container-xl">
                    <h3 class="text-center alert-dark"><a href="/services/{{$service->id}}">{!! $service->Intitule!!}</a></h3>
                    <p class="text-center alert-info">{!! $service->Article !!}</p>
                </div>
@endsection