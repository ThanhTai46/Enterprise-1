<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'student_id',
    	'student_uploadimage',
        'student_uploadfile',
        'student_description',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'student_id';
 	protected $table = 'student';
}
