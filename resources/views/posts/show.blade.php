@extends('layouts/app')

@section('content')
<h1>{{ $post->title }}</h1>
<p>	{{ $post->content }}</p>

<h4> {{ $post->user->name }} </h4>
@endsection