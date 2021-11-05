<?php
namespace App\Http\Controllers;

use App\Models\ListPc;
use App\Models\MisDoc;
use Illuminate\Http\Request;

class ListPcController extends Controller
{
    public function makepclist(Request $request)
    {
        $invnum=$request->get('inpnum');
        $ip=$request->get('inpip');

        if (empty($invnum) && empty($invnum)) {
            return view("pc");
        }

        if(!empty($invnum)){
            $res=ListPc::where('inv',$invnum)->get();
            return view("pctable",['tab'=>$res]);
        }

        if(!empty($ip)){
            $res=ListPc::where('ip',$ip)->get();
            return view("pctable",['tab'=>$res]);
        }


    }
}

