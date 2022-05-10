<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use Illuminate\Support\Facades\Hash;

class DownloadController extends Controller
{
    function login() {
        return view("auth.download.login");
    }

    function register() {
        return view("auth.download.register");
    }

    function save(Request $request) {


        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:downloads",
            "password" => "required|min:5|max:12"
        ]);

        $newUser = new Download();
        $newUser->name = $request["name"];
        $newUser->email = $request["email"];
        $newUser->password = Hash::make($request["password"]);
        $save = $newUser->save();

        if($save) {
            return back()->with("success", "La registrazione si è conclusa correttamente");
        } else {
            return back()->with("fail", "La registrazione non è andata a buon fine, riprova");
        }
    }

    function check(Request $request) {

        $request->validate([
            "email" => "required|email",
            "password" => "required|min:5|max:12"
        ]);

        $userInfo = Download::where("email", "=", $request->email)->first();

        if(!$userInfo) {
            return back()->with("fail", "L'indirizzo email non è presente");
        } else {
            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put("LoggedUser", $userInfo->id);
                return redirect("/brani");
            } else {
                return back()->with("fail", "La password non è corretta, riprova");
            }
        }
    }

    function brani() {
        $data = ["LoggedUserInfo" => Download::where("id", "=", session("LoggedUser"))->first()];
        return view("auth.download.brani", $data);
    }
      
}
