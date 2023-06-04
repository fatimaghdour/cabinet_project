<?php

namespace App\Models;
use App\Models\Rendezvous;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    use HasFactory;
  
    protected $fillable=['N°Dossier','Nom','Prenom','DateNai','address','Telephone','Sexe','image'];
    protected $primaryKey = 'N°Dossier';
    public function Rendezvous(){
        return $this->hasMany(Rendezvous::class,'N°Dossier');
    }
}
