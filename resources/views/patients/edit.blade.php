@extends('layouts.app')
@section('content')

 
</style>
<div class="card push-top" id="form">
  <div class="card-header">
    Edit & Update
  </div>
  <div class="card-body" >
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('patients.update', $patients->N°Dossier) }}" enctype="multipart/form-data">
        <div class="form-group">
          @csrf
          @method('PATCH')
          <label for="N°Dossier">N°Dossier</label>
          <input type="number" class="form-control" name="N°Dossier" value="{{ $patients->N°Dossier }}"/>
      </div>
          <div class="form-group">
              <label for="Nom">Prenom</label>
              <input type="text" class="form-control" name="Nom" value="{{ $patients->Nom }}"/>
          </div>
          <div class="form-group">
            <label for="Prenom">Nom</label>
            <input type="text" class="form-control" name="Prenom" value="{{ $patients->Prenom }}"/>
        </div>
        <div class="form-group">
          <label for="Sexe">Sexe</label><br/>
          <select name="Sexe" style="background: rgb(22, 21, 24);color:white;border-radius:15px ">
            <option name="Sexe">F</option>
            <option name="Sexe">M</option>
          </select>
      </div>
         
          <div class="form-group">
              <label for="Telephone">Telephone</label>
              <input type="phone" class="form-control" name="Telephone" value="{{ $patients->Telephone }}"/>
          </div>
          <div class="form-group">
        <label for="address">adress</label>
        <input type="text" class="form-control" name="address" value="{{ $patients->address }}"/><br/>
    </div>
    
      <div class="form-group">
        <label for="DateNai">DateNai</label>
        <input type="date" class="form-control" name="DateNai" value="{{ $patients->DateNai }}"/><br/>
    </div>
      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" /><br/>
    </div>
        
          <button type="submit" class="btn btn-block btn-dark" style="color: white">Update Patient</button>
          <a class="btn btn-primary" href="{{ route('patients.index') }}" style="margin-left:20px;"> Back</a>
      </form>
  </div>
</div>
@endsection