@extends('layouts.main')
@section('content')
    @if (count($Activites) < 0)
        <h1 class="alert-danger">Table is empty</h1>
    @else
        @foreach($Activites as $activitie)
            id={{$activitie->id}}

        @endforeach

    @endif

@endsection
