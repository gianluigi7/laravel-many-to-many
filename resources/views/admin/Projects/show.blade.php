@extends('layouts.app')

@section('content')
<h1>{{$project->title}}</h1>
<p>{{$project->description}}</p>
<p>{{$project->types?->title  ?:'Categoria non definita'}}</p>
<ul>
    @foreach ($technologies as $technology) 
     <li>{{ $technology->title }}</li>

    @endforeach
</ul>

<a href="{{ route('admin.projects.index') }}"><button>torna all'elenco</button></a>
@endsection