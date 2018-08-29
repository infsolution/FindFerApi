@extends('layouts.app')
@section('lgtadmin')
<a class="dropdown-item" href="{{ route('admin.logout') }}"onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>
 <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
@csrf
</form>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - ADMIN</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bem vindo Sr. {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
