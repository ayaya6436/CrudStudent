@extends('layouts.master')
@section('content')
    
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-0">Listes des Etudiant inscrits</h3>
    {{-- message de suppression --}}
    @if(session()->has('successDelete'))
      <h3 class="alert alert-success">
          {{ session()->get('successDelete') }}
      </h3>
  @endif
    <div class="my-4">
      <div class="d-flex justify-content-between mb-2">
      {{ $etudiants->links() }}

      <div>
        <a href="{{Route('student.create')}}" class="btn btn-primary ">Ajouter un nouvel etudiant</a>

      </div>
       
      </div>
      {{-- pagination --}}

      <table class="table table-bordered table-hover " >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Classe</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($etudiants as $etudiant)
          <tr>
            <th scope="row">{{($loop->index + 1)}}</th>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->classe->libelle}}</td>
            <td>
                <a href="{{route('etudiant.edit',['etudiant'=>$etudiant->id])}}" class="btn btn-info">Editer</a>
                <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez supprimer cet etudiant'))
                {
                  document.getElementById('form-{{$etudiant->id}}').submit()

                }"
                >Supprimer</a>

                <form id="form-{{$etudiant->id}}" action="{{route('etudiant.supprimer',['etudiant' => $etudiant->id])}}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="delete">

                </form>
            </td>
          </tr>
    
          @endforeach
          
        </tbody>
      </table>
    </div>
    
    
  </div>

@endsection

