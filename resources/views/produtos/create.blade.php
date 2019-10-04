@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $titulo }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('produtos.store') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="descricao" class="col-md-2 col-form-label text-md-right">{{ __('Descrição') }}</label>
                                <div class="col-md-6">
                                    <input id="descricao" type="text" class="form-control" name="descricao" value="{{ old('name') }}" required>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="fornecedor" class="col-md-2 col-form-label text-md-right">{{ __('Fornecedor') }}</label>
                                <div class="col-md-6">
                                    <input id="fornecedor" type="text" class="form-control" name="fornecedor" value="{{ old('email') }}" required>
                                </div>
                            </div>
        
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Salvar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection