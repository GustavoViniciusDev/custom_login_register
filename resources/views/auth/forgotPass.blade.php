@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">Recuperação de senha</div>
            <div class="card-body">
                <form action="" method="post">
                    
                    <div class="mb-4 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Digite o email cadastrado:</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control" id="email" name="email" >
                        
                        </div>
                    </div>                    
                    <div class="mb-4 row"> 
                        <input type="submit" class="col-md-4 offset-md-4 btn btn-primary" value="Enviar código">
                    </div>

                    <div class="mb-4 row">
                        <div class="col-md-6  text-md-end">
                            <a href="{{ route('login') }}"  class="">Voltar</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>      
</div>


@endsection