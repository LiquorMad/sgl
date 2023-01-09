<!-- general form elements -->
@extends('page')

@section('content')
    <div class="space"></div>
    <div class="card card-primary">
        <div class="card-header card-header-register">
            <h3 class="card-title">Atualizar Fonte</h3>
        </div>
        <!-- /.card-header -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <!-- form start -->
        <form action="{{ route('fontes.update', $fonte) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                {{-- ---------------------------------------------------------------------------- --}}
                <div class="form-group">
                    <label>Endereço</label>
                    <span class="text-danger">
                        @error('endereco')
                            {{ $message }}
                        @enderror
                    </span>
                    <input type="text" value="{{ $fonte->endereco }}" class="form-control input1" name="endereco">
                </div>
                {{-- ---------------------------------------------------------------------------- --}}
                <div class="form-group">
                    <label>Descrição</label>
                    <span class="text-danger">
                        @error('descricao')
                            {{ $message }}
                        @enderror
                    </span>
                    <input type="text" class="form-control input1" name="descricao" value="{{ $fonte->descricao }}">
                </div>
                {{-- ---------------------------------------------------------------------------- --}}
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal"><a 
                        href="{{ route('fontes.index') }}" class="btn btn-secondary">Cancelar</a></button>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
            {{-- ---------------------------------------------------------------------------- --}}
        </form>
        <!-- form end -->
    </div>
    <!-- /.card -->
    <style>
        .space {
            height: 60px;
        }

        .color-picker {
            padding: 10px;
            margin: 10px;
        }

        .border {
            background: black;
            border-style: solid;
            border-color: black;
            width: 37px;
            height: 36px;
            margin: 10px;
            padding-left: 1px;
        }

        .hidden {
            display: none;
        }
    </style>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $('.select2').select2({
            theme: "classic"
        });
    </script>
@stop
