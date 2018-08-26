@extends('post')
@section('conteudo')
@if($aboult)
	<div class="row">
		<h2>{{$aboult->title}}</h2>
	</div>
	<div class="row">
		<label>Fundador: <strong>{{$aboult->founder}}</strong></label>
	</div>
	<div class="col-lg-6">
          <img class="img-fluid rounded" src="{{$aboult->url_image_startup}}" alt="">
    </div>
    <div class="col-lg-6">
          <img class="img-fluid rounded" src="{{$aboult->url_image_founder}}" alt="">
    </div>
    <hr>
    <div class="row">
		<!--{{$aboult->description}}-->
		<?php echo $aboult->description?>
	</div>
	<div class="row">
	<label>A FindFer foi fundada em <strong>{{$aboult->date_founder}}</strong></label>
	</div>
@endif

@stop