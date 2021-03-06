@extends('admins.layout.master')
@section('polycies','active')
@section('title','Thêm')
@section('content')
<div>
        <ul class="breadcrumb">
            <li>
                <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Thông tin liên hệ</a> </li>
        </ul>
        <hr>
  
<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Cập nhật thông tin liên hệ</div>
        <div class="panel-body">
           
            <div class="row">
                <form action="" method="POST" role="form">
                 @csrf
                    <div class="col-md-6">
                            <div class="form-group">
                                    <label>Tên công ty</label>
                                    <input type="text" name="name" id="" class="form-control" value="{{$contact->name}}">
                                    @if($errors->has('address'))
                                        <div class="alert alert-danger">{{$errors->first('name')}}</div>
                                    @endif
                                </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{$contact->address}}">
                            @if($errors->has('address'))
                                <div class="alert alert-danger">{{$errors->first('address')}}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{$contact->phone}}">
                                @if($errors->has('phone'))
                                    <div class="alert alert-danger">{{$errors->first('phone')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số điện thoại 2</label>
                                <input type="text" name="phone2" id="phone" class="form-control" value="{{$contact->phone2}}">
                                @if($errors->has('phone2'))
                                    <div class="alert alert-danger">{{$errors->first('phone2')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="fax" id="fax" class="form-control" value="{{$contact->fax}}">
                                @if($errors->has('fax'))
                                    <div class="alert alert-danger">{{$errors->first('fax')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{$contact->email}}">
                                @if($errors->has('email'))
                                    <div class="alert alert-danger">{{$errors->first('email')}}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fanpage</label>
                                <input type="text" name="fanpage" id="fanpage" class="form-control" value="{{$contact->fanpage}}">
                                @if($errors->has('fanpage'))
                                    <div class="alert alert-danger">{{$errors->first('fanpage')}}</div>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                    
                   
                    <div class="form-actions">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Cập nhật</button>
                            <a href="{{route('contact.list')}}">
                                <button type="button" class="btn btn-white btn-cons"> Trở lại</button>
                            </a>
                            
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
