<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
	protected $primaryKey = 'id';
	protected $rules = "";
	protected $fieldLang = "";
	protected $fillable = [ 'name','email','phone','message'];
	
	public $timestamps = false;
	public function __construct(){
		parent::__construct();
	}
}
