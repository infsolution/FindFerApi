@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrador {{ Auth::user()->name }}</div>
            </div>
            
            <table class="table table-striped table-bordered table-hover">
            <tr>
            <td>
            <h2>Feiras cadastradas no sistema</h2>
            </td>
            <td></td>
            <td><a href="{{route('market.create')}}" class="btn btn-primary">Cadastrar feira</a></td>
            </tr>
                @foreach($markets as $market)
                    <tr>
                    <td>{{$market->name}}</td>
                    <td>{{$market->description}}</td>
                    <td><a href="{{route('market.create')}}"><span >Update market</span></a></td>
                    </tr>
                @endforeach
            </table>    
        </div>
    </div>
</div>
@endsection