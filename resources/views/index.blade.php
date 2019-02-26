<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Paginação</title>

    </head>

    <body>
        <div class="container">

        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>

</html>
