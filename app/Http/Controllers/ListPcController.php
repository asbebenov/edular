<?php
namespace App\Http\Controllers;

use App\Models\FreeIp;
use App\Models\ListPc;
use App\Models\MisDoc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class ListPcController extends Controller
{
    public function pcpanel(){
        return view("pc");
    }

    public function makepclist(Request $request)
    {
        $invnum=$request->get('inpnum');
        $ip=$request->get('inpip');
        $krp=$request->get('krp');
        if(!empty($invnum)){
            $res=ListPc::where('inv',$invnum)->get();
            return view("pctable",['tab'=>$res]);
        }

        if(!empty($ip)){
            $res=ListPc::where('ip',$ip)->get();
            return view("pctable",['tab'=>$res]);
        }

        if(!empty($krp)){
            $res=ListPc::where('korp',$krp)->get();
            if($krp=='all') {$res=ListPc::all();}
            return view("pctable",['tab'=>$res]);
        }

    }

    public function ffip(){

      //  $list36=FreeIp::with(['findfreeip'])->whereNull('listPc.ip')->where('freeIp.ip', 'like', '10.174.36.%')->get();
        $list36=FreeIp::query()->select('free_ips.*')->
        leftJoin('list_pcs', function ($join) {
            $join->on('free_ips.ip', '=', 'list_pcs.ip');
        })->whereNull('list_pcs.ip')->where('free_ips.ip', 'like', '10.174.36.%')->get();

        $list37=FreeIp::query()->select('free_ips.*')->
        leftJoin('list_pcs', function ($join) {
            $join->on('free_ips.ip', '=', 'list_pcs.ip');
        })->whereNull('list_pcs.ip')->where('free_ips.ip', 'like', '10.174.37.%')->get();

        $list38=FreeIp::query()->select('free_ips.*')->
        leftJoin('list_pcs', function ($join) {
            $join->on('free_ips.ip', '=', 'list_pcs.ip');
        })->whereNull('list_pcs.ip')->where('free_ips.ip', 'like', '10.174.38.%')->get();

        $list39=FreeIp::query()->select('free_ips.*')->
        leftJoin('list_pcs', function ($join) {
            $join->on('free_ips.ip', '=', 'list_pcs.ip');
        })->whereNull('list_pcs.ip')->where('free_ips.ip', 'like', '10.174.39.%')->get();

        return view('listfreeip',['tab36'=>$list36,'tab37'=>$list37,'tab38'=>$list38,'tab39'=>$list39]);
    }
}
/*


        $list36=FreeIp::query()->select('free_ips.*')
            ->leftJoin('list_pcs', function ($join) {
                $join->on('free_ips.ip', '=', 'list_pcs.ip');
            })->whereNull('list_pcs.ip')->where('free_ips.ip', 'like', '10.174.36.%')->get();


 * */

