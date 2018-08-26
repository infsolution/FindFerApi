@extends('post')
@section('conteudo')
@if($contacts)
<h4>Contatos FindFer</h4>
	@foreach($contacts as $contact)
		<h2>{{$contact->title}}</h2>
		<label><strong>{{$contact->type}}</strong>: {{$contact->value}}</label>
	@endforeach
@endif
<div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Deixe-nos uma mensagem</h3>
          <form action="/contacts" method="post">
          	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="control-group form-group">
              <div class="controls">
                <label>Nome:</label>
                <input type="text" class="form-control"  name="name_user">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefone:</label>
                <input type="tel" class="form-control"  name="fone">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control"  name="email">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Mensagem:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" >Enviar</button>
          </form>
        </div>

      </div>

@stop