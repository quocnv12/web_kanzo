@extends('admins.layout.master')
<!-- BEGIN DASHBOARD TILES -->
@section('content')

<h1 class="page-header">Đổi mật khẩu</h1>
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            @csrf
         @if (session('thongbao'))
             <div class="alert alert-success" role="alert">
                 <strong>{{ session('thongbao') }}</strong>
             </div>
         @endif
         @if (session('thongbao1'))
         <div class="alert alert-danger" role="alert">
             <strong>{{ session('thongbao1') }}</strong>
         </div>
     @endif
            <div class="form-group" style="position:relative">
                <label for="">Mật khẩu cũ :</label>
                <input type="password" class="form-control" placeholder="*******" name="password_old">
                <a style="position:absolute;top:56%;right:10px;" href="javascript:;void(0)"><i class="fa fa-eye"></i></a>
            </div>
            {!! ShowError($errors,'password_old') !!}
            <div class="form-group" style="position:relative">
                <label for="">Mật khẩu mới :</label>
                <input type="password" class="form-control" placeholder="*******" name="password">
               
                <a style="position:absolute;top:56%;right:10px;" href="javascript:;void(0)"><i class="fa fa-eye"></i></a>
            </div>
            {!! ShowError($errors,'password') !!}
            <div class="form-group" style="position:relative">
                <label for="">Nhập lại mật khẩu :</label>
                <input type="password" class="form-control" placeholder="*******" name="password_confirmation">
               
                <a style="position:absolute;top:56%;right:10px;" href="javascript:;void(0)"><i class="fa fa-eye"></i></a>
            </div>
            {!! ShowError($errors,'password_confirmation') !!}
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>  Cập nhật</button>
        </form>
    </div>
</div>

@endsection

@section('script')
<script>
        $(function(){
            $(".form-group a").click(function(){
                let $this = $(this);
                if($this.hasClass('active'))
                {
                    $this.parents('.form-group').find('input').attr('type','password')
                    $this.removeClass('active');
                }else
                {
                    $this.parents('.form-group').find('input').attr('type','text')
                    $this.addClass('active');
                }
            });
        });
    </script>
@endsection