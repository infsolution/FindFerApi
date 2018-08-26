@extends('post')
@section('conteudo')

@if(old(’name’))
	<div class="alert alert-success">
	<strong>Obrigado por entra em contato com nosco, em breve responderemos!</strong>
	</div>
@endif
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Deixe-nos uma mensagem</h3>
          <form name="contact" action="/contact">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="control-group form-group">
              <div class="controls">
                <label>Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefone:</label>
                <input type="tel" class="form-control" id="fone" name="fone">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" name="email">
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
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </form>
        </div>

      </div>
@stop