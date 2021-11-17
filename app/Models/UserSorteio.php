<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSorteio extends Model
{
    use HasFactory;
    protected $fillable=['data'];
    public function user () {
        return $this -> belongsToMany('App\Models\User');
    }
}
