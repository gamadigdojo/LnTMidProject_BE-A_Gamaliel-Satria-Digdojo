<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;

class Employee extends Controller
{
    function addEmployee(Request $req ) {
        $data = [
            "nama_karyawan" => $req->nama_karyawan,
            "umur_karyawan" => $req->umur_karyawan,
            "alamat_karyawan" => $req->alamat_karyawan,
            "telepon_karyawan" => $req->telepon_karyawan
        ];

        EmployeeModel::create($data);
        return redirect()->back();
    } 

    
    function deleteEmployee($id) {
        EmployeeModel::find($id)->delete();
        return redirect()->back();
    }

    function getUpdateEmployee($id) {
        $data=EmployeeModel::find($id);
        return view("edit-employee", ["dataEmployee"=>$data]);
    }

    function updateEmployee(Request $req, $id){
        $data=EmployeeModel::find($id);
        $data->update([
            "nama_karyawan" => $req->nama_karyawan,
            "umur_karyawan" => $req->umur_karyawan,
            "alamat_karyawan" => $req->alamat_karyawan,
            "telepon_karyawan" => $req->telepon_karyawan
        ]);

        return redirect()->back();
    }

}
