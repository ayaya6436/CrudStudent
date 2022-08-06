@extends('layouts.master')
@section('content')
    
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-0">Modification d'un etudiant</h3>
    <div class="my-4 ">

      @if(session()->has('successUpdate'))
      <h3 class="alert alert-success">
          {{ session()->get('successUpdate') }}
      </h3>
  @endif
         
        <form style="width: 65%;" method="post" {{{ route('etudiant.update',['etudiant'=>$etudiant->id]) }}}>
          @csrf

          <input type="hidden" name="_method" value="put">
 
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
              <input type="text" class="form-control" name="nom" required value="{{$etudiant->nom}}">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label ">Prenom de l'etudiant </label>
              <input type="text" class="form-control" name="prenom" required value="{{$etudiant->prenom}}" >
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Classe</label>
                <select class="form-control" name="classe_id" required>
                    <option value=""></option>
                    @foreach ($classes as $classe)

                    @if($classe->id == $etudiant->classe_id)
                        <option value="{{$classe->id}}">{{$classe->libelle}}</option>

                        @else

                        <option value="{{$classe->id}}">{{$classe->libelle}}</option>
                        @endif
                        
                    @endforeach

                </select>
              </div>
        
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <a href="{{route('student')}}" class="btn btn-danger">Annuler</a>

            
          </form>
       
      
    </div>
    
    
  </div>

@endsection

