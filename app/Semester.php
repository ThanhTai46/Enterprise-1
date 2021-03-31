<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Semester extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'semester_name', 'start_date','end_date'
    ];
    protected $primaryKey = 'semester_id';
 	protected $table = 'semester';
}
