@extends('layouts.master')
@section('content')
    
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-0">Ajout d'un nouvel etudiant</h3>
    <div class="my-4 row">
         
        <form style="width: 65%;" method="post" {{{ route('student.add') }}}>
          @csrf

 
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nom de l'etudiant </label>
              <input type="text" class="form-control" >
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label ">Prenom de l'etudiant </label>
              <input type="text" class="form-control" >
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Classe</label>
                <select class="form-control">
                    <option value=""></option>
                    @foreach ($classes as $classe)
                        <option value="{{$classe->id}}">{{$classe->libelle}}</option>
                    @endforeach

                </select>
              </div>
        
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{route('student')}}" class="btn btn-danger">Annuler</a>
          </form>
       
      
    </div>
    
    
  </div>

@endsection

