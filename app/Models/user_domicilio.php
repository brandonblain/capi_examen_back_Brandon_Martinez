<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class user_domicilio extends Model
{
    use HasFactory;

    protected $table = "user_domicilio";
    public $timestamps = false;

    public function Users(){
        return $this->hasMany(User::class,'id');
    }
}
