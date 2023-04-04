<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'employeer_id',
        'tattoo_id',
        'amount',
        'date',
        'time',
        'consume_soap',
        'consume_cream_healing',
        'consume_cream_anesthesia',
        'consume_liquid',
        'consume_ink',
        'consume_mask',
        'consume_needle'
    ];

    public function employeer(){
        return $this->belongsTo(Employeer::class ,'employeer_id');
    }

    public function client(){
        return $this->belongsTo(Client::class ,'client_id');
    }

    public function tattoo(){
        return $this->belongsTo(Tattoo::class ,'tattoo_id');
    }
}
