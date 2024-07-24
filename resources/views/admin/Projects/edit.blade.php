@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <form action="{{ route('admin.projects.update',$project) }}" method="POST" class="mt-5">
            @csrf
            @method('PUT')
            
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control @if ($errors->get('title')) is-invalid @endif" id="exampleFormControlInput1" name="title" value="{{ old('title',$project->title) }}">
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
                <input type="text" class="form-control @if ($errors->get('description')) is-invalid @endif" id="exampleFormControlInput1" name="description" value="{{ old('description',$project->description) }}">
                @if ($errors->get('description'))
                    <div class="invalid-feedback">
                        @foreach ($errors->get('description') as $error )
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
            </div>
          
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
</div>
@endsection