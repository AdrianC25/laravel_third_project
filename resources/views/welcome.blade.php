@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.appView.banner')
    @include('layouts.appView.about')
    @include('layouts.appView.clases')
    @include('layouts.appView.cta')
    @include('layouts.footer')
@endsection

@section('css')
@parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        /* Main Styling */
        html,body{
            font-family: 'Monserrat', sans-serif;
        }

        h1,h2{
            font-family: 'Catamaran',sans-serif !important;
        }

        /* bootstrap styles */
        .bg-primary{
            background: #ff6d2d !important;
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

        .btn-primary{
            background: #ff6d2d;
            border: 0;
        }

        .btn-primary:hover{
            background: #fff;
            border: 0;
            color: #ff6d2d
        }

        .text-primary{
            color: #ff6d2d !important;
        }
        /* Utility clases */
        .pt-6{
            padding-top: 120px;
        }

        .py-6{
            padding: 80px 0;
        }

        /* header */
        .header{
            background: url('/img/background.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .header .row{
            --bs-gutter-x:0;
        }

        /* Clases */
        .clases{
            background: url('/img/background-secondary.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        /* Mobile */
        @media(max-width: 768px){
            .py-6{
                padding: 20px;
            }
            .clases .card-yoga{
                padding: 10px !important;
            }
        }

    </style>   
@endsection