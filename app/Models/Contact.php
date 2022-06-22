<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function getID()
    {
        return $this->id ; 
    }
    public function getLastname()
    {
        return $this->last_name ; 
    }
    public function getFirstname()
    {
        return $this->first_name ;
    }
    public function getGender()
    {
        return $this->gender ;
    }
    public function getEmail()
    {
        return $this->email ;
    }
    public function getOpinion()
    {
        return $this->opinion ;
    }
}
