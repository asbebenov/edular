<?php
namespace App\Http\Controllers;

use App\Models\MisDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmController extends Controller {
    public function admpage () {
        return(view("adm"));
    }

    public function app_data (Request $form_data) {

        $vol = $form_data->get('vol');
        $str = $form_data->get('rowtitle');
        $file = $form_data->file('uplfile');
        $path = $form_data->file('uplfile')->storeAs('public/'.$vol, $file->getClientOriginalName());
        $sitepath = Storage::get($path);
        echo $sitepath;
        die('ok');
        $mdb = new MisDoc();
        $mdb->name=$str;
        $mdb->doc='storage/'.$vol.'/'.$file->getClientOriginalName();
        $mdb->razdel=$vol;
        $mdb->save();
    }

}

