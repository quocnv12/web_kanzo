<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <base href="{{ asset('') }}">
    <!-- BEGIN PLUGIN CSS -->
    <link href="admin-template/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="admin-template/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <link href="admin-template/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="admin-template/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
  

    <link href="admin-template/assets/plugins/jquery-metrojs/MetroJs.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="admin-template/assets/plugins/shape-hover/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="admin-template/assets/plugins/shape-hover/css/component.css" />
    <link rel="stylesheet" type="text/css" href="admin-template/assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="admin-template/assets/plugins/owl-carousel/owl.theme.css" />
   
    <link href="admin-template/assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="admin-template/assets/plugins/jquery-ricksaw-chart/css/rickshaw.css" type="text/css"
        media="screen">
    <link rel="stylesheet" href="admin-template/assets/plugins/Mapplic/mapplic/mapplic.css" type="text/css"
        media="screen">
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="admin-template/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="admin-template/assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin-template/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="admin-template/assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="admin-template/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="admin-template/webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="">
    <!-- BEGIN HEADER -->
    @include('admins.layout.header')
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
        <!-- BEGIN SIDEBAR -->
       
        @include('admins.layout.sidebar')

        <!-- END SIDEBAR -->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body"> Widget settings form goes here </div>
            </div>
            <div class="clearfix"></div>
            <div class="content sm-gutter">
                <div class="page-title">
                </div>
                <!-- BEGIN DASHBOARD TILES -->
                     @yield('content')
            </div>
        </div>
        <!-- BEGIN CHAT -->
        
        <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN CORE JS FRAMEWORK-->
    <script src="admin-template/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="admin-template/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="admin-template/webarch/js/webarch.js" type="text/javascript"></script>
    <script src="admin-template/assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="admin-template/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
    <script src="admin-template/assets/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
    <script src="admin-template/assets/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
    <script src="admin-template/assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="admin-template/assets/plugins/skycons/skycons.js"></script>
    <script src="admin-template/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="admin-template/assets/plugins/jquery-gmap/gmaps.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/Mapplic/js/jquery.easing.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/Mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/Mapplic/js/hammer.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/Mapplic/mapplic/mapplic.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="admin-template/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="admin-template/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>

    @yield('script')
    <script>
            $('.checkall').click(function () {
              if($(this).checked){
                $('.checkbox1_item').prop('checked', false);
              }else{
                $('.checkbox1_item').prop('checked', true);
              }
            });
      
            // $('.button_checkbox1_item').click(function (event) {
            //   if($(this).siblings('.checkbox1_item').checked){
            //     $(this).siblings('.checkbox1_item').prop('checked', false);
            //   }else{
            //     $(this).siblings('.checkbox1_item').prop('checked', true);
            //   }
            // });
          </script>
          <!-- END CORE TEMPLATE JS -->
      
      
          <script>
            $(function () {
              $('#example1').DataTable({
                language: {
                  search: "Tìm kiếm:",
                  "oPaginate": {
                    sNext:    "Sau",
                    sPrevious: "Trước",
                  },
                    EmptyTable:     "Không có dữ liệu trong bảng",
                    sInfo:           "Hiển thị _START_ đến _END_ trong tổng số _TOTAL_ dữ liệu",
                    sInfoEmpty:      "Hiển thị 0 dữ liệu",
                    sInfoFiltered:   "(lọc từ toàn bộ _MAX_ dữ liệu)",
                    sLengthMenu:     "HIển Thị _MENU_ dữ liệu",
                    sLoadingRecords: "Đang Tải...",
                    sProcessing:     "Đang Xử Lí...",
                    sZeroRecords:    "Không tìm thấy dữ liệu",
      
                }
              });
              $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
              });
            });
          </script>
</body>

</html>
