<?php namespace App;
   
use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    protected $fillable = [
		'aktifitas',
		'deskripsi',
		'tgl_deadline',
		'status',
	];

}