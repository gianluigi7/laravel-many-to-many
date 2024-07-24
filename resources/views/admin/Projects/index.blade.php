@extends('layouts.app')

@section('content')

<h1>Progetti</h1>
<ul>

    @foreach ($projects as $project)
    <li>

        {{$project->title}}
        <a href="{{ route('admin.projects.show', $project) }}">

            <button>mostra</button>
        </a>
        
        <a href="{{ route('admin.projects.edit', $project) }}">

            <button>modifica</button>
        </a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Cancella</button>
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sicuro di voler procedere?</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Non sarà più possibile recuperare il record
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                  <form action="{{route('admin.projects.destroy',$project)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancella</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> 
        @endforeach
    </li>
</ul>


<a as='button' href="{{ route('admin.projects.create') }}">crea</a>
@if (session('message'))
   <div class="alert alert-success">
       {{ session('status') }}
   </div>
@endif
@endsection
