<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>Paginação</title>
        <style>
            body{
                padding: 20px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    Tabela de Clientes
                </div>
                <div class="card-body">
                    <h5 class="card-title">Exibindo 10 clientes de 1000 (1 a 10)</h5>
                    <table class="table table-hover">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cesar</td>
                                <td>Augusto</td>
                                <td>cesar@gmail.com</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cesar</td>
                                <td>Augusto</td>
                                <td>cesar@gmail.com</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Cesar</td>
                                <td>Augusto</td>
                                <td>cesar@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Paginas
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>

</html>
