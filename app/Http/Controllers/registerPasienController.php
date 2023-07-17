<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\VarDumper\Cloner\Data;

class registerPasienController extends Controller
{
        public function showRegisterForm(){
            return view('register');
        }

        public function registerPost(Request $request){

            $input = $request->all();
            
            $data =  \App\modelMaster::simpanPasienRegister($input);
            
            if($data){
                return redirect('login/pasien')->with('alert-success','Kamu berhasil Register');
            }else{
                echo 'Gagal Menyimpan Data dan Mendaftarkan Pasien.';
            }
        }
}
