<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    protected $fillable= ['nama_karyawan','umur_karyawan','alamat_karyawan','telepon_karyawan'];
    protected $table = "employees";
}
