<!DOCTYPE html>

<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>

    <title></title>

    @livewireStyles

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>



<div class="container">



    <div class="card">

      <div class="card-header">

        {{-- Laravel Livewire --}}

      </div>

      <div class="card-body" style="padding: 101px;border: 12px solid black;border-radius: 20px;margin-top: 27px;">
                @livewire('login-register')

      </div>

    </div>



</div>





</body>

<script src="{{ asset('js/app.js') }}"></script>

@livewireScripts

</html>
