<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
       
    	'student_uploadimage',
        'student_uploadfile',
        'student_description',
        'created_at',
        'updated_at',
        'faculity_name'
    ];
    protected $primaryKey = 'student_id';
 	protected $table = 'student';
}
