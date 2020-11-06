<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramOfServices extends Model
{
    protected $fillable=["name","description","status","initialHour","finishHour","services_id"];
}
