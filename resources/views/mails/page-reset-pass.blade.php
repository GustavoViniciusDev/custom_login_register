@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Redefinir sua Senha</div>
            <div class="card-body">
                <form action=" {{ route('password.update') }}" method="post">
                    @csrf


                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="mb-4 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email:</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control id="email" name="email" value="{{ $email ?? old('email') }}">
                          <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Nova Senha:</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password" name="password">
                          <span class="text-danger">@error('password'){{ $message }}  @enderror</span>
                        </div>
                    </div>
                   
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirmar Senha:</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                          <span class="text-danger">@error('password_confirmation'){{ $message }}  @enderror</span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Atualizar Senha">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>


@endsection