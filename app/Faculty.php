<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Faculty extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'faculity_name', 'faculity_description'
    ];
    protected $primaryKey = 'faculity_id';
 	protected $table = 'faculity';
}
