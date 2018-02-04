<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!--<link rel="stylesheet" href="{{ mix('css/app.css') }}">-->
    <link rel="stylesheet" href="/LaravelProject/public/css/app.css">

    <script>
    window.Laravel = {
        csrfToken: "{{ csrf_token() }}"
    };
    </script>
</head>
<body>
<h2>Vue Test</h2>
<div id="app">
    <navbar></navbar>
    <div class="container">
        <router-view></router-view>
    </div>
</div>
</body>
<!--<script src="{{ mix('js/app.js') }}"></script>-->
<script src="/LaravelProject/public/js/app.js"></script>
</html>