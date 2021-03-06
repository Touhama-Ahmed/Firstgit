@extends('layouts.main')
@section('content')
    @if (count($Activites) < 0)
        <h1 class="alert-danger">Table is empty</h1>
    @else
        <div class="container marketing" >
        <div class="row">
        @foreach($Activites as $activitie)

                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>{{$activitie->id}}</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>{{$activitie->Theme}}</h2>
                    <p>{{$activitie->Article}}</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->

        @endforeach
        </div><!-- /.row -->
        </div>
    @endif

@endsection
