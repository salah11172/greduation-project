<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
public function showalluserforadmin()
{
    $data=User::all();
    return view('admin.user.showalluserforaadmin',["data"=>$data]);
}
public function admindeleteuser($id)
{
    User::find($id)->delete();
    return redirect()->back();
}
}
