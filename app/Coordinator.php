<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Coordinator extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'cordinator_name', 'coordinator_email','coordinator_phone', 'coordinator_address',
    ];
    protected $primaryKey = 'cordinator_id';
 	protected $table = 'cordinator';
}
