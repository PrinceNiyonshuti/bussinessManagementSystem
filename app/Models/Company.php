<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function employees()
    {
        $this->hasMany(Employee::class);
    }

    public function clients()
    {
        $this->hasMany(Client::class);
    }
}
