@extends('post')
@section('conteudo')
@if($post)
	<h2>{{$post->title}}</h2>
	<div class="row">
	<img src="{{$post->url_image}}">
	</div>
	<div class="row">
	{{$post->content}}
	</div>
@endif

@stop