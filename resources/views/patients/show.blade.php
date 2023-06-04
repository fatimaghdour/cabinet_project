@extends('layouts.app')
@section('content')

<div style="text-align: center">
<div class="row" >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Patient's details</h2>
        </div>
      
    </div>
</div>
<div class="row" style="color: black ;font-size:1.4em;">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>image:</strong>
        </div>
    </div>
<div class="row" style="color: black ;font-size:1.4em;">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>N°Dossier:</strong>
            {{ $patients->N°Dossier }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom:</strong>
            {{ $patients->Nom }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prenom:</strong>
            {{ $patients->Prenom }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sexe:</strong>
            {{ $patients->Sexe }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telephone:</strong>
            {{ $patients->Telephone }}
        </div>
    </div>
    
  
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>address:</strong>
            {{ $patients->address }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>DateNaissance:</strong>
            {{ $patients->DateNai }}
        </div>
    </div>
  
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>
    

  
        <a class="btn btn-block btn-dark" style="color: white;margin-left:20px;" href="{{ route('patients.edit',$patients->N°Dossier )}}"> edit</a>
    </div>
       


</div>
</div>

@endsection