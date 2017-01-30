<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Models\Banner;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Accesslog;
class BannersController extends Controller
{
    public function index(Request $request) 
    {

        $data = $request->getContent();
        
        $sumlen = strlen($data);
        $req = json_decode($data, TRUE);
        if(!empty($req)){
            $model = new Accesslog;
            $ip = $request->ip();
            $model->ip = $ip;
            $model->os_version = $req['os_version'];
            $model->rom = $req['rom'];
            $model->arch = $req['arch'];
            $model->model = $req['model'];
            $model->screen = $req['screen'];    
            $model->save();
        }   
        $device = $request->input('device', 'ios');
        $type = $request->input('type', 1);
        $data = [];



        $list = Banner::where('screen', $req['screen'])
                ->where('status', 1)
                ->orderBy('end_at', 'desc')->get(['id', 'img', 'url','start_at','end_at',]);

        return response()->json(['status' => true, 'data' => $list]);
    }





}
