@extends('layouts.app')
@section('content')


<div class="push-top">
  @if(session()->get('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}  
    </div><br />
  @endif
</div>
  <table  class="table" id="table">
    <thead>
        <tr class="table-dark">
          <td>Patient</td>
          <td>N°Dossier</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>DateNai</td>
          <td>Sexe</td>
          <td>Telephone</td>
          <td>Address </td>
        
        
          <td class="text-center">Action</td>
        

       
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patients)
        <tr style="color: black;">

            <td ><img style="border-radius: 50%;" src="admin/img/{{$patients->image}}" width="50px" height="100px"></td>
            <td >{{$patients->N°Dossier}}</td>
            <td>{{$patients->Nom}}</td>
            <td>{{$patients->Prenom}}</td>
            <td>{{$patients->DateNai}}</td>
            <td>{{$patients->Sexe}}</td>
            <td>{{$patients->Telephone}}</td>
            <td>{{$patients->address}}</td>
         
            <!-- style="display:flex;justify-content:space-between" -->
           
            <td class="text-center" >
                <a href="{{ route('patients.edit', $patients->N°Dossier)}}" ><i class="fa fa-edit" style="color: blue;font-size: 1.5em"></i></a>
                <a href="{{ route('patients.show', $patients->N°Dossier)}}" ><i class="fa fa-eye" style="color: brown;font-size: 1.5em"></i></a>
                <form action="{{ route('patients.destroy', $patients->N°Dossier)}}" method="post" style="display: inline-block" onsubmit="return confirm('est-ce que vous averz sur');">
                    @csrf
                    @method('DELETE')
                    <button  type="submit" style="background: transparent; border:none;"><i class="fa fa-trash" style="color: red;font-size: 1.5em"></i></button>
                  </form>
                 
            </td>
        </tr>

        @endforeach

    </tbody>
  </table>
  
 
 
@endsection
