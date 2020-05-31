<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Usercontacts;

//images upload
use Illuminate\Http\UploadedFile;


class UsercontactsController extends Controller
{
    public function usercontacts()
    {
       return view('/');
    }
 

    public function store(Request $data)
    {

        $student = new Usercontacts;
        $student->name=$data->name;
        $student->email=$data->email;
        $student->message=$data->message;
        $student->save();

        return redirect('/');

    }
    public function destroy($id)
    {
        //
        $user = Usercontacts::findorfail($id);
        $user->delete();

        return redirect('allcreate.contacts');
    }
   
}
