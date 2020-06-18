<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = ['annonce_title', 'annonce_content', 'annonce_photo', 'annonce_type', 'subadmin_id', 'teacher_id'];
    protected $hidden = ['subadmin_id', 'teacher_id'];

}
