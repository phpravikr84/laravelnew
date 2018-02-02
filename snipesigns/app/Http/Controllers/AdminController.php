<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class AdminController extends Controller{

        public function checkLogin(Request $request){

                if(isset($request['username']) && isset($request['password'])){

                    if(strlen($request['username'])>0 && strlen($request['password'])){

                        return view('admin.dashboard');

                    } else{
                        return redirect()->back();
                    }
                } else{

                    return redirect()->back();
                }

        }

}

