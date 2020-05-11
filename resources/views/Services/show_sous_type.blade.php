@extends('layouts.main')

@section('content')
    <h1 class="text-center">Services</h1>
    @if(count($services)>0)
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4">
                    <h3 class="text-center alert-dark"><a href="/services/article/{{$service->id}}">{!! $service->Intitule !!}</a></h3>
                    <p class="text-center alert-info">{!! $service->Resume !!}</p>
                </div>
            @endforeach
        </div>
    @else
        <h3>Aucun service est disponible</h3>
    @endif
@endsection