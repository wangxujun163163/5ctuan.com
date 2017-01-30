@extends('layout')
@section('page_header_title', '开机广告图管理')
@section('content') 

                  

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <span style="color: red;"> &nbsp;&nbsp;&nbsp;</span>
                            <span><a class="btn btn-primary" role="button"  href="/banners/create">新增广告图</a></span>
                        </div>
                
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                 
                   
                     


                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th >序号 </th>
                                        <th >图片 </th>
                                         <th >分辨率 </th>

                                        <th >开始时间 </th>
                                        <th>结束时间 </th>
                                        <th >URL </th>
                                        <th >状态 </th>
                                        <th >操作 </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($list as $index => $item)
                                    <tr class="odd gradeX"  id="item_{{$item->id}}">
                                      
                                        <td>{{$index+1}}</td>
                                        <td><img src="{{$item->img}}" width="200" /></td>
                                        <td>{{$item->screen}}</td>
                                        <td>{{$item->start_at}}</td>
                                        <td>{{$item->end_at}}</td>
                                         <td title="{{$item->url}}">{{mb_substr($item->url,0,50)}}</td>
                                    
                                    <td id="status_{{$item->id}}">@if ($item->status == 1) <font color="green">开启</font> @else <font color="red">关闭</font> @endif</td>
                <td >
                  <span id="status_op_{{$item->id}}">
                  @if ($item->status == 1) 
                  <a href="javascript:;" onclick="sclose({{$item->id}})"><i class="fa fa-close"></i>关闭</a>&nbsp;
                  @else 
                  <a href="javascript:;" onclick="sopen({{$item->id}})"><i class="fa fa-circle-o"></i>开启</a>&nbsp;
                  @endif
                  </span>
                  <a href="/banners/{{$item->id}}/edit"><i class="fa fa-edit"></i>编辑</a>&nbsp;
                  <a href="javascript:;" onclick="del({{$item->id}})"><i class="fa fa-trash"></i>移除</a>
                </td>
                                    </tr>
                                   @endforeach 
                      
                                </tbody>
                     </table> 
                                   </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



            <!-- /.row -->
 
                   
                          
@endsection

@section('js')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function del(id) 
    {
        if (confirm('确定删除吗?')) {
            $.ajax({
                url: '/banners/'+id,
                type: 'DELETE',
                dataType: 'json',
                success: function(data) {
                    if (data.status == 1) {
                        alert("删除成功");
                        $("#item_"+id).remove();
                    } else {
                        alert("删除失败");
                    }
                }
            });
        }
    }

    function sopen(id) 
    {
      if (confirm('确定开启吗?')) {
        $.post('/banners/'+id+'/open', '', function(data) {
          if (data.status == 1) {
            $("#status_"+id).html('<font color="green">开启</font>');
            $("#status_op_"+id).html('<a href="javascript:;" onclick="sclose('+id+')"><i class="fa fa-close"></i>关闭</a>&nbsp;');
          } else {
            alert('开启失败');
          }
        }, 'json')
      }
    }

    function sclose(id) 
    {
      if (confirm('确定关闭吗?')) {
        $.post('/banners/'+id+'/close', '', function(data) {
          if (data.status == 1) {
            $("#status_"+id).html('<font color="red">关闭</font>');
            $("#status_op_"+id).html('<a href="javascript:;" onclick="sopen('+id+')"><i class="fa fa-circle-o"></i>开启</a>&nbsp;');
          } else {
            alert('关闭失败');
          }
        }, 'json')
      }
    }

    $(function(){
      var type = {{$params['type']}};

      $("#device").change(function(){
        window.location.href="banners?type="+type+"&device="+$(this).val();
      });
    })

</script>

@endsection