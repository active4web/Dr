<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagesModel extends Model
{
    //
    public $table = 'messages';
	public $fillable = ['name','phone','message','mail'];
}
