<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presente extends Model
{
    use HasFactory;
    protected $fillable=['descricao', 'user_id'];
    public function user () {
        return $this -> belongsTo('App\Models\User');
    }
}
