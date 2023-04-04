<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'start', 'end', 'client_id', 'employeer_id'
    ];

    public function employeer(){
        return $this->belongsTo(Employeer::class ,'employeer_id');
    }

    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }  
}
