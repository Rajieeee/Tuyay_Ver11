<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    //gawa muna table ha bago migrate
    protected $table = 'students_tb_';
    protected $primarykey = 'id';
    protected $fillable = [
        'stud_no',
        'stud_fname',
        'stud_mname',
        'stud_lname',
        'stud_bday',
        'zip'
    ];
}
