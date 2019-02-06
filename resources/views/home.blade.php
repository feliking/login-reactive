@extends('layouts.app')

@section('content')
<div class="container">
    <my-thoughts-component></my-thoughts-component>
</div>
{{-- <div class="card">
    <div class="card-header">En que estas pensando ahora?</div>

    <div class="card-body">
    
    <form action="{{ route('thoughts.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="thought">Ahora estoy pensando en:</label>
            <input type="text" class="form-control" name="description">
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">
            Enviar pensamiento
        </button>
    </form>
    </div>
</div> --}}
@endsection
