@extends('page')
@section('js')
    <script>
        $(document).ready( function () {
            $('#example1').DataTable({
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/pt-BR.json"
            },
            });
        } );
    </script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
@endsection
@section('content')
    <!-- /.row -->
    <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    </head>
    <div class="space">
        <!-- space between top and content -->
    </div>
    <div class="row responsive-row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        @include('layouts.users.create', $tipoUtilizador)
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-hover table-head-fixed">
                                    <thead>
                                        <tr id="titulo_fila_in">
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Tipo</th>
                                            <th>Acções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $users)
                                            <tr id="table_conteudo">
                                                <td data-label="Nome">{{ $users->name }}</td>
                                                <td data-label="Email ">{{ $users->email }}</td>
                                                <td data-label="Tipo ">{{ $users->tipo }}</td>
                                                <td data-label="Acções ">
                                                    <button title="editar" class="button"><a class="button"
                                                        href="{{ route('users.edit',$users->id) }}"><i class="fas fa-edit edite_icon "
                                                            style="color: rgb(0, 0, 0)"></i></a></button>
                                                    <form method="POST" style="display: inline-block" action="{{ route('users.destroy', $users->id) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button title="eliminar" data-togle="modal" onclick="return confirm('Tens a certeza?')" style="color: rgb(255, 0, 0)" class="button"><i
                                                                class="fas fa-trash-alt" style="color: rgb(255, 0, 0)"
                                                                id="btn-admin-to-option-fontes"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
    <style>
        td {
            word-wrap: break-word;
        }

        .button {
            border: none;
            background-color: transparent;
        }

        /*Respnsive table*/
        @media (max-width:700px) {
            .table thead {
                display: none;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }

            .table tbody tr td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .table td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-size: 14px;
                text-align: left;
                font-weight: bold;
            }
        }

        /*/. Respnsive table*/
        .escolher_rota,
        .novo_registo {
            display: inline-block;
            position: relative;
        }

        .novo_registo {
            float: right
        }

        .form-group {
            display: inline-block;

        }

        .form-control {
            height: 35px;
        }

        .escolher_rota,
        .novo_registo {
            display: inline-block;
            position: relative;
        }

        .novo_registo {
            float: right
        }

        .form-group {
            display: inline-block;

        }

        .form-control {
            height: 35px;
        }

        .space {
            height: 60px;
        }
    </style>

@stop
