<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //menampilkan index data staff
    public function index(){
        $staff = User::select('*')
            ->get();
        return view('dashboard.staff.index', ['staff' => $staff]);
    }

    public function show(){
        return view ('dashboard.staff.tambahStaff');
    }

    public function store(Request $request){

        //validasidata
        $staff = $request -> validate([
            'name' => 'required',
            'dateBirth' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'address' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required',
            'startWorking' => 'required',
            'nik'=> 'required',
            'division' => 'required|max:255',
            'password'=>'required|min:6|max:255'
        ]);
        $staff['password']=bcrypt($staff['password']);

        //User::create($staff);


        $staff = User::create([
            'name' => $request->name,
            'dateBirth' => $request->dateBirth,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'startWorking' => $request->startWorking,
            'nik' => $request->nik,
            'division' => $request->division,
            'password' => $request->password,
        ]);

        //ambil data dari database
        $data =[
            'staff' => User::all()
        ];
        return view('dashboard.staff.index', $data);
    }

}
