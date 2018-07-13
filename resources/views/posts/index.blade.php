@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card card-body">
                <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts Found</p>
    @endif
@endsection