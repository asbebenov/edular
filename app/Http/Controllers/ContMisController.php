<?php


namespace App\Http\Controllers;


use App\Models\MisDoc;
use Illuminate\Support\Facades\DB;

class ContMisController extends Controller
{
 public function makedata($id){

       // $res = MisDoc::all();
          $res = MisDoc::where('razdel',$id)->get();
          if($id=='video'){
              return view('video', ['docs' => $res]);
          }else {
              return view('page', ['docs' => $res]);
          }
  }
}
