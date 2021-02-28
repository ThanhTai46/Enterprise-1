<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    //
    public $timestamps = false; //set time to false
    protected $fillable = [
        'Faculity_name' ,'Student_uploadfile' , 'date-upload'
    ];
    protected $primaryKey = 'id_statistical';
    protected $table = 'statistical';
}
