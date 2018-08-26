@extends('post')
@section('conteudo')

<div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Descrição da empresa</h3>
          <form action="/aboult" method="post">
          	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="control-group form-group">
              <div class="controls">
                <label>Titulo</label>
                <input type="text" class="form-control"  name="title">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Fundador:</label>
                <input type="tel" class="form-control"  name="founder">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Data da fundção:</label>
                <input type="date" class="form-control"  name="date_founder" value="{{date('d-m-Y')}}">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Descrição:</label>
                <textarea rows="10" cols="100" class="form-control" id="description" name="description" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </form>
        </div>

      </div>

@stop