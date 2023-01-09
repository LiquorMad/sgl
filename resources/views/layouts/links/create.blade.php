<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>

    <div class="input-group mb-3 ">
        <a href="#" id="button_right" class="button ">
            <button type="button" class="btn btn-primary" class="btn btn-block btn-primary" data-toggle="modal"
                data-target="#modalCreate">Registo Manual<i class="fas fa-plus"></i></button>
            <button type="button" class="btn btn-primary" class="btn btn-block btn-primary" data-toggle="modal"
                data-target="#modalCreateAuto">Registo Auto<i class="fas fa-plus"></i></button>
        </a>
    </div>

    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registar novo link</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('links.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Endereço:</label>
                            <input type="text" class="form-control" id="recipient-name" name="endereco">
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Fonte:</label>
                            <select id="" name="fonte" class="form-control js-example-basic-single">
                                @foreach ($fontes as $fontes)
                                    <option>{{ $fontes->endereco }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Título:</label>
                            <input type="text" class="form-control" id="recipient-name" name="descricao">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Registar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCreateAuto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registar novo link</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="GET" action="{{ route('links.auto.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Fonte:</label>
                            <select id="" name="fonte" class="form-control js-example-basic-single">
                                @foreach ($fontesAuto as $fontesAuto)
                                    <option>{{ $fontesAuto->endereco }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Descricao:</label>
                            <input type="text" class="form-control" id="recipient-name" name="descricao">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Registar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
</body>

</html>
