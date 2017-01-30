@extends('layout')
@section('page_header_title', '设备访问日志')
@section('content') 

                  


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                 
                   
                     


                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th >序号 </th>
                                        <th >系统版本 </th>
                                        <th >rom   </th>
                                        <th>cpu架构 </th>
                                        <th >设备机型 </th>
                                        <th >分辨率 </th>
                                        <th >ip </th>
                                         <th> 访问时间</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($list as $index => $item)
                                    <tr class="odd gradeX"  id="item_{{$item->id}}">
                                      
                                        <td>{{$index+1}}</td>
                                         <td>{{$item->os_version}}</td>
                                        <td>{{$item->rom}}</td>
                                        <td>{{$item->arch}}</td>
                                        <td>{{$item->model}}</td>
                                        <td>{{$item->screen}}</td>
                                        <td>{{$item->ip}}</td>
                                        <td>{{$item->created_at}}</td>
                                        
                                    
                                   
          
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

