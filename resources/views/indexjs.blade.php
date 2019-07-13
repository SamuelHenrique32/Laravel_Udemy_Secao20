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
                    <h5 class="card-title"></h5>
                    <table class="table table-hover" id="tabelaClientes">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">E-mail</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Marcel</td>
                                <td>Teodoro</td>
                                <td>marcel@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <nav id="paginator">
                        <ul class="pagination">
                        <!--
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        -->    
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>

        <script type="text/javascript">

            function getItemProximo(data){
                // Verificar se e a ultima pagina
                if(data.last_page == data.current_page){
                    s = '<li class="page-item disable"> ';
                }
                else{
                    s = '<li class="page-item"> ';
                }
                s += ' <a class="page-link" href="#">Próximo</a></li> ';
                return s;
            }

            function getItemAnterior(data){
                // Verificar se e a primeira pagina
                if(1 == data.current_page){
                    s = '<li class="page-item disable"> ';
                }
                else{
                    s = '<li class="page-item"> ';
                }
                s += ' <a class="page-link" href="#">Anterior</a></li> ';
                return s;
            }

            function getItem(data, i){
                // Verificar se a pagina esta ativa
                if(i == data.current_page){
                    s = '<li class="page-item active"> ';
                }
                else{
                    s = '<li class="page-item"> ';
                }
                s += ' <a class="page-link" href="#">' + i + '</a></li> ';
                return s;
            }

            function montarPaginator(data){
                // Limpa antes de criar nova
                $("#paginator>ul>li").remove();
                $("#paginator>ul").append(getItemAnterior(data));

                inicio = 1;
                fim = 10;
                for(i=inicio ; i<=fim ; i++){
                    s = getItem(data, i);
                    //console.log(s);
                    $("#paginator>ul").append(s);
                }
                $("#paginator>ul").append(getItemProximo(data));
            }
            
            function montarLinha(cliente) {
                return '<tr>' +
                    '<td>' + cliente.id + '</td>' +
                    '<td>' + cliente.nome + '</td>' +
                    '<td>' + cliente.sobrenome + '</td>' +
                    '<td>' + cliente.email + '</td>' +
                '</tr>';
            }

            function montarTabela(data) {
                //apagar linhas da tabela
                $("#tabelaClientes>tbody>tr").remove();
                //carregar
                for(i=0 ; i<data.data.length ; i++){
                    s = montarLinha(data.data[i]);
                    //console.log(s);
                    $("#tabelaClientes>tbody").append(s);
                }
            }

            function carregarClientes(pagina){
                $.get('/json', {page: pagina}, function (resp) {
                    console.log(resp);
                    montarTabela(resp);
                    montarPaginator(resp);
                })
            }
            //quando carregar pagina totalmente
            $(function(){
                carregarClientes(8);
            });
        </script>
    </body>

</html>
