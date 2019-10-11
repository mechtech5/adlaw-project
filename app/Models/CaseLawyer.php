<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseLawyer extends Model
{
    protected $table = 'case_lawyer';
    public $timestamps = false;
	protected $guarded = [];


    protected $primaryKey = 'case_id';

 	public $incrementing =false;
}
