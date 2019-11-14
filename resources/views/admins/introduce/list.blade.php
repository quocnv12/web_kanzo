@extends('admins.layout.master')

@section('title')
Danh Sách Người Dùng
@endsection

@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-hover table-condensed" id="example">
                    <thead>
                        <tr>
                            <th style="width:1%">STT
                                <!-- <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                                    <input type="checkbox" value="1" id="checkbox1">
                                    <label for="checkbox1"></label>
                                </div> -->
                            </th>
                            <th style="width:10%">Tiêu Đề</th>
                            <th style="width:32%" data-hide="phone,tablet">Nội dung</th>
                            <th style="width:6%">Trạng Thái</th>
                            <th style="width:10%" data-hide="phone,tablet">Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($introduce as $row)
                        <tr>
                            
                            <td class="v-align-middle">{{$row->id}}</td>
                            <td class="v-align-middle">{{$row->title}}</td>
                            <td class="v-align-middle"><span class="muted">{{$row->content}}</span></td>
                            <td><span class="muted">{{$row->active}}</span></td>
                            <td class="v-align-middle">
                                <div class="progress ">
                                    <div data-percentage="80%"
                                        class="progress-bar progress-bar-success animate-progress-bar"></div>
                                </div>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script src="admin-template/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<!-- END CORE JS DEPENDECENCIES-->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="admin-template/webarch/js/webarch.js" type="text/javascript"></script>
<script src="admin-template/assets/js/chat.js" type="text/javascript"></script>

<script src="admin-template/assets/js/dashboard_v2.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script type="text/javascript" src="admin-template/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="admin-template/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<script src="admin-template/assets/js/datatables.js" type="text/javascript"></script>    
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<!-- BEGIN JS DEPENDECENCIES-->
@endsection
