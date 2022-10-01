<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\SegiEmpat;

/******************************************
    Membuat kelas Balok perluasan/turunan dari
    Kelas SegiEmpat
*******************************************/

class Balok extends SegiEmpat
{
    public $tebal; //properti

    /**************************
    method menghitung volume
    ***************************/
    public function volume()
    {
        return $this->tebal * $this->luas(); 
    }
}


