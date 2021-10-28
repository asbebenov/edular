<?php


namespace App\Http\Controllers;


use App\Models\MisDoc;
use Illuminate\Support\Facades\DB;

class ContMisController extends Controller
{
 public function makedata($id){

//      $req = 'select * from '.$id.';';
    //  $res = DB::connection('mysql')->select($req);
        $res = MisDoc::all();

      return view('page', ['docs' => $res]);
  }
}
