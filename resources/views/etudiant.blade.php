@extends('layouts.master')
@section('content')
    
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-0">Listes des Etudiant inscrits</h3>
    <div class="my-4">
      <div class="d-flex justify-content-end mb-2">
        <a href="#" class="btn btn-primary ">Ajouter un nouvel etudiant</a>

      </div>

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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>
                <a href="#" class="btn btn-info">Editer</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
            </td>
            
          </tr>
          
        </tbody>
      </table>
    </div>
    
    
  </div>

@endsection