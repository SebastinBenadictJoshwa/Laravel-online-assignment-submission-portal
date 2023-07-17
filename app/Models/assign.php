<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assign extends Model
{
    protected $table="assignment";
    protected $fillable=['assignmentname','subjectname','lastdate','degree','dept','year','date','regno','assignfile'];
}
