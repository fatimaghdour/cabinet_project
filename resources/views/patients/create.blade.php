@extends('layouts.app')

@section('content')



<div class="card push-top" id="form">
  <div class="card-header">
    Add Patient
  </div>
  <div class="card-body">
    
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('patients.store') }}" enctype="multipart/form-data" >
          <div class="form-group">
              @csrf
              <label for="N°Dossier">N°Dossier</label>
              <input type="number" class="form-control" name="N°Dossier"/>
          </div>
          <img src="admin/img">
          <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" class="form-control" name="Nom"/>
        </div>
          <div class="form-group">
            <label for="Prenom">Prenom</label>
            <input type="text" class="form-control" name="Prenom"/>
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
              <input type="phone" class="form-control" name="Telephone"/>
          </div>
          <div class="form-group">
            <label for="address">address</label>
            <input type="text" class="form-control" name="address"/>
        </div>
        <div class="form-group">
          <label for="DateNai">DateNai</label>
          <input type="date" class="form-control" name="DateNai"/><br/>
      </div>
      <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" name="image"/><br/>
      </div>
    
    
          <button type="submit" class="btn btn-block btn-dark" style="color: white">Create Patient</button>
          <input type="reset" class="btn btn-block btn-warning" value="cancel" style="margin-left: 20px"/>
   
      </form>
  
  </div>
</div>

@endsection