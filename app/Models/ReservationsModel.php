<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationsModel extends Model
{
    //
    public $table = 'reservations';
	public $fillable = ['name','dentist','reason','phone','date_time'];
}
