<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'comment',
        'student_uploadfile',
        'student_id',
        'grade',
    ];
    protected $primaryKey = 'comment_id';
 	protected $table = 'comment';
}
