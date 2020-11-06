<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable=["name","description","status","icon","linkServices","type"];
}
