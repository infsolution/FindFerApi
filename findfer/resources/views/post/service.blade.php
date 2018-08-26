@extends('post')
@section('conteudo')
@if($services)
	@foreach($services as $service)
		<h2>{{$service->title}}</h2>
		{{$service->description}}
		{{$service->value}}
	@endforeach
@endif

@stop