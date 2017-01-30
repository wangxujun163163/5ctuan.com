@extends('layout')

@section('content') 

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>编辑广告位 </h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          @include('messages')
          <br />
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" role="form" method="post" action="/banners/{{$item->id}}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">开始时间 <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="start_at" required="required" readonly="readonly" value="{{$item->start_at}}" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">结束时间 <span class="required">*</span></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="end_at" required="required" readonly="readonly" value="{{$item->end_at}}" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

 

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">URL </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="url" value="{{$item->url}}" class="form-control col-md-7 col-xs-12" placeholder="格式:http://www.google.com" >
              </div>
            </div>

                       <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">图片分辨率 </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="screen" value="{{$item->screen}}" class="form-control col-md-7 col-xs-12" placeholder="格式:1920*1080" >
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">图片</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                 <input type="text"  name="img"   value="{{$item->img}}"  style="width: 700px;  border-color: #B94A48;"><br/>
                 <span class="help-inline"><a href="http://ios_cms.itools.cn/upload.php"  target="_blank" >上传图片请点击这里</a></span>
              </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-success">提交</button>
                <button type="reset" class="btn btn-primary">重置</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection