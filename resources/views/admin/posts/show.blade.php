@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>{{$post->title}}</h4></div>
                <div class="card-body">
                    <p>{{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection