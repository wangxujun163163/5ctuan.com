<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Traits\Upload;
use App\Http\Models\Banner;
use App\Accesslog;
use DB;

class BannersController extends Controller
{
 





    public function device(Request $request)
    {
     
        $list = DB::table('accesslogs')->orderBy('id', 'desc')->get();
       
    
        return view('device/index', ['list' => $list]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
 
        $params['type'] = $request->input('type', 1);
        $params['device'] = $request->input('device', 'ios');

    

        $list = Banner::where(function($query) use ($params) {
            if ($params['type']) {
                $query->where('type', $params['type']);
            }

        })->orderBy('id', 'desc')->orderBy('sort', 'desc')->get();

    
        return view('banners/index', ['list' => $list, 'params' => $params, 'types' => Banner::getTypes()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


   

 
        $type = $request->input('type', 1);
        $device = $request->input('device', 'ios');

        return view('banners/create', [
            'type' => $type, 
            'device' => $device, 
            'types' => Banner::getTypes(), 
            'devices' => Banner::getDevices(), 
            'sizes' => Banner::getSizes(), 
     
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'start_at.required' => '开始时间不能为空',
            'end_at.required' => '结束时间不能为空',
            'screen.required' => '分辨率不能为空',
            'url.required' => 'URL不能为空',
            'img.required' => '图片不能为空',
            'url.url' => 'URL格式不正确',
            'end_at.after' => '结束时间必须大于开始时间',
        ];

        $this->validate($request, [
            'start_at' => 'required',
            'end_at' => 'required|after:start_at',
            'url' => 'required|url',
            'screen' => 'required',
            'img' => 'required',

        ], $messages);

        $model = new Banner;
        $model->type = 1;

        $model->start_at = $request->start_at;
        $model->end_at = $request->end_at;
        $model->screen = $request->screen;
        $model->url = $request->url;
        $model->img = $request->img;
        
        $model->save();

        return redirect("banners?type={$request->type}&device={$request->device}")->with('message', '添加成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Banner::findOrFail($id);

        return view('banners/edit', ['item' => $item, 'types' => Banner::getTypes(), 'devices' => Banner::getDevices(), 'user_types' => Banner::getUserTypes()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Banner::findOrFail($id);

        $messages = [
            'start_at.required' => '开始时间不能为空',
            'end_at.required' => '结束时间不能为空',
            'screen.required' => '分辨率不能为空',
            'url.required' => 'URL不能为空',
            'img.required' => '图片不能为空',
            'url.url' => 'URL格式不正确',
			'end_at.after' => '结束时间必须大于开始时间',
        ];

        $this->validate($request, [
            'start_at' => 'required',
            'end_at' => 'required|after:start_at',
            'url' => 'required|url',
            'screen' => 'required',
             'img' => 'required',
        ], $messages);

        $item->start_at = $request->start_at;
        $item->end_at = $request->end_at;
        $item->screen = $request->screen;

        $item->url = $request->url;
        $item->img = $request->img;
        $item->save();

        return redirect("banners?type={$item->type}&device={$item->device}")->with('message', '修改成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::destroy($id);
        return response()->json(['status' => 1]);
    }

    public function open($id) 
    {
        if (Banner::where('id', $id)->update(['status' => 1])) {
            return response()->json(['status' => 1]);
        } 

        return response()->json(['status' => 0]);
    }

    public function close($id) 
    {
        if (Banner::where('id', $id)->update(['status' => 0])) {
            return response()->json(['status' => 1]);
        } 

        return response()->json(['status' => 0]);
    }

}
