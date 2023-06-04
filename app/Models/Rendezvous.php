<?php

namespace App\Models;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;
    protected $fillable=['N°Dossier','Date','heure'];

    public function patient(){
        return $this->belongsTo(Patient::class,'N°Dossier');
    }
}
