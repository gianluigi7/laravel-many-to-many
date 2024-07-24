@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <form action="{{ route('admin.projects.store') }}" method="POST" class="mt-5">
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control @if ($errors->get('title')) is-invalid @endif" id="exampleFormControlInput1" name="title" value="{{ old('title') }}">
                @if ($errors->get('title'))
                <div class="invalid-feedback">
                    @foreach ($errors->get('title') as $error )
                    {{ $error }}
                    @endforeach
                </div>
                @endif
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                <input type="text" class="form-control @if ($errors->get('description')) is-invalid @endif" id="exampleFormControlInput1" name="description" value="{{ old('description') }}">
                @if ($errors->get('description'))
                <div class="invalid-feedback">
                    @foreach ($errors->get('description') as $error )
                    {{ $error }}
                    @endforeach
                </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Seleziona la categoria</label>
                <select class="form-select" aria-label="Default select example" name="type_id">
                    
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if (old('$type->id') == $type->id) selected @endif>{{ $type->title }}</option>
                    @endforeach
                    
                </select>
                <!-- <div class="invalid-feedback">
                    @foreach ($errors->get('description') as $error )
                    {{ $error }}
                    @endforeach
                </div> -->
                
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
</div>
@endsection
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->