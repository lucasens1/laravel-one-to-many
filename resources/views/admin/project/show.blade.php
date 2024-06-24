@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Dettagli Progetto : {{$project->title}}</h1>
    <div class="d-flex align-items-start">
        <div class="mx-2">
            <h6>{{ $project->description}}</h6>
        </div>
    </div>
</div>
@endsection