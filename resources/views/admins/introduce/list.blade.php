@extends('admins.layout.master')
@section('title','Danh sách')
@section('introduce','active')
@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-hover table-condensed" id="example1">
                    <thead>
                        <tr>
                            <th style="width:1%">STT
                            </th>
                            <th style="width:12%">Tiêu Đề</th>
                            <th style="width:38%" data-hide="phone,tablet">Nội dung</th>
                            <th style="width:2%">T.Thái</th>
                            <th style="width:6%" data-hide="phone,tablet">Progress</th>
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

