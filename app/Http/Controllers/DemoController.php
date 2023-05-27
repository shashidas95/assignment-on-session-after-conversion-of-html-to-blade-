<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function SessionPut(Request $request):bool
    {
        $email=$request->email;
        $request->session()->put(key:'userEmail', value:$email);
        return true;
    }
    public function SessionPull(Request $request):string
    {
       return $request->session()->pull(key:'userEmail', default:null);
    }

     public function SessionGet(Request $request):string
    {
       return $request->session()->get(key:'userEmail', default:'null');
    }
    public function SessionForget(Request $request):bool
    {
      $request->session()->forget('userEmail');
       return true;
    }
      public function SessionFlush(Request $request):bool
    {
      $request->session()->flush();
       return true;
    }
}
