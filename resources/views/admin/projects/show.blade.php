@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $project->title }}</h1>
                <p>
                {{ $project->content }}
                </p>
            </div>
        </div>
    </div>

@endsection