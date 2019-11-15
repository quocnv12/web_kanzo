@extends('admins.layout.master')
@section('form','active')
@section('title','Thêm')
@section('content')
<div>
        <ul class="breadcrumb">
            <li>
                <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Tables</a> </li>
        </ul>
        <hr>
  
<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm sản phẩm</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Mã sp</label>
                        <input type="text" name="name" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Giá sp</label>
                        <input type="text" name="name" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Sản phẩm có nổi bật</label>
                        <select name="featured" class="form-control">
                            <option value="0">Không</option>
                            <option value="1">Có</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select name="state" class="form-control">
                            <option value="1">Còn hàng</option>
                            <option value="0">Hết hàng</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>
                        <input id="img" type="file" name="img" value="" class="form-control hidden"
                            onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="images/import-img.png">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Gender</label>
                            <textarea name="content" id="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Save</button>
                        <button type="button" class="btn btn-white btn-cons">Cancel</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
