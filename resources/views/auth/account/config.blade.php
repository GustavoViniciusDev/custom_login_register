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
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ Auth::user()->name }}">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
        <div class="col-md-6">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ Auth::user()->email }}">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telefone" class="col-md-4 col-form-label text-md-end text-start">Numero de Celular</label>
        <div class="col-md-6">
          <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" value="{{ Auth::user()->telefone }}" onkeyup="handlePhone(event)" >
            @if ($errors->has('telefone'))
                <span class="text-danger">{{ $errors->first('telefone') }}</span>
            @endif
        </div>
    </div>

    <div class="mb-3 row">
        <label for="datanasc" class="col-md-4 col-form-label text-md-end text-start">Data de Nascimento</label>
        <div class="col-md-6">
            <input type="date" class="form-control @error('datanasc') is-invalid @enderror" id="datanasc" name="datanasc" value="{{ Auth::user()->datanasc }}"    pattern="^[1-9][0-9]{0,3}$">
            @if ($errors->has('datanasc'))
                <span class="text-danger">{{ $errors->first('datanasc')}}</span>
            @endif
        </div>
    </div>

    <div class="mb-3 row">
        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Senha Atual</label>
        <div class="col-md-6">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
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