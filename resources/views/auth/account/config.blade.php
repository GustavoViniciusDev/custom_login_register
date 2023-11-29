@extends('auth.layouts')

@section('content')

<div class="d-flex align-items-center justify-content-center" style="height: 15vh;">
    
    <h2 class="text-center"> Informações da sua Conta</h2>
</div>

<form action="{{ route('update') }}" method="post">
    @csrf
    <div class="mb-3 row">
        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Nome de Usuario</label>
        <div class="col-md-6">
          <input type="text" class="form-control" id="name" name="nome" value="{{ Auth::user()->name }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
        <div class="col-md-6">
          <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telefone" class="col-md-4 col-form-label text-md-end text-start">Numero de Celular</label>
        <div class="col-md-6">
          <input type="text" class="form-control" id="telefone" name="telefone" value="{{ Auth::user()->telefone }}" onkeyup="handlePhone(event)" >
        </div>
    </div>

    <div class="mb-3 row">
        <label for="datanasc" class="col-md-4 col-form-label text-md-end text-start">Data de Nascimento</label>
        <div class="col-md-6">
            <input type="date" class="form-control" id="datanasc" name="datanasc" value="{{ Auth::user()->datanasc }}"    pattern="^[1-9][0-9]{0,3}$">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Senha Atual</label>
        <div class="col-md-6">
          <input type="password" class="form-control" id="password" name="password">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Nova Senha</label>
        <div class="col-md-6">
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
    </div>
    <div class="mb-3 row">
        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Atualizar Informações">
    </div>
    
</form>
@endsection