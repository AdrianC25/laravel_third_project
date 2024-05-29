@extends('layouts.app')
@section('content')
@include('layouts.navbar')
<div class="containe py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border border-dark">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Iniciar sesión</h5>
                </div>
                <div class="card-body">
                    <form method="" >

                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input id="email" type="email" class="form-control" name="email" autofocus>
                        </div>

                        <div class="form-group pb-3">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
@parent
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    /* Main Styling */
    html,body{
        font-family: 'Monserrat', sans-serif !important;
    }

    h1,h2{
        font-family: 'Catamaran',sans-serif !important;
    }

    /* bootstrap styles */
    .bg-primary{
        background: #ff6d2d !important;
    }

    .btn-primary{
        background: #ff6d2d;
        border: 0;
    }

    .btn-primary:hover{
        background: #fff;
        border: 0;
        color: #ff6d2d
    }

    .btn-info{
        background: #fff;
        border: 0;
        color: #ff6d2d;
    }

    .btn-info:hover{
        background: #000;
        border: 0;
        color: #fff;
    }

</style>
@endsection