<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('public/frontend/img/logoshop.png')}}">
    <title>The Perfume - Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\jquery.vectormap\jquery-jvectormap-1.2.2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\jqvmap\jqvmap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\datetimepicker\css\bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\select2\css\select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\bootstrap-slider\css\bootstrap-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\perfect-scrollbar\css\perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\material-design-icons\css\material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\datatables\datatables.net-bs4\css\dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets\lib\datatables\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/assets\css\app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/backend/assets/js/skins/moono-lisa/editor.css')}}" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="{{asset('public/backend/assets/js/ckeditor.js')}}" type="text/javascript"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a class="navbar-brand" href="{{URL::to('/dashboard')}}"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{('public/backend/assets/img/avatar.png')}}" alt="Avatar"><span class="user-name">
                <?php
                $name = Session::get('qtTen');
                if($name){
                    echo $name;
                }
                ?>            
            </span></a>
                <div class="dropdown-menu" role="menu">
                  <div class="user-info">
                    <div class="user-name">
                        <?php
                        $name = Session::get('qtTen');
                        if($name){
                            echo $name;
                        }
                        ?>
                    </div>
                    <div class="user-position online">Available</div>
                  </div><a class="dropdown-item" href="{{URL::to('/admin-thongtin')}}"><span class="icon mdi mdi-face"></span>Tài khoản</a><a class="dropdown-item" href="{{URL::to('/logout')}}"><span class="icon mdi mdi-power"></span>Đăng xuất</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="{{URL::to('/dashboard')}}">Tổng quan</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="{{URL::to('/dashboard')}}"><i class="icon mdi mdi-home"></i><span>Tổng quan</span></a>
                  </li>
                  <li><a href="{{URL::to('/information')}}"><i class="icon mdi mdi-layers"></i><span>Thông tin cửa hàng</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Sản phẩm</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-sanpham')}}">Liệt kê sản phẩm</a>
                      </li>
                      <li><a href="{{URL::to('/add-sanpham')}}">Thêm sản phẩm</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Đơn hàng</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/manage-donhang')}}">Quản lý đơn hàng</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Mã giảm giá</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/list-magiamgia')}}">Liệt kê mã giảm giá</a>
                      </li>
                      <li><a href="{{URL::to('/insert-magiamgia')}}">Thêm mã giảm giá</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Bình luận</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/comment')}}">Quản lý bình luận</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Loại sản phẩm</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-loaisanpham')}}">Liệt kê loại sản phẩm</a>
                      </li>
                      <li><a href="{{URL::to('/add-loaisanpham')}}">Thêm loại sản phẩm</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Thương hiệu sản phẩm</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-thuonghieu')}}">Liệt kê thương hiệu sản phẩm</a>
                      </li>
                      <li><a href="{{URL::to('/add-thuonghieu')}}">Thêm thương hiệu sản phẩm</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Mùa sản phẩm</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-muasanpham')}}">Liệt kê mùa sản phẩm</a>
                      </li>
                      <li><a href="{{URL::to('/add-muasanpham')}}">Thêm mùa sản phẩm</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Dung tích sản phẩm</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/all-dungtich')}}">Liệt kê dung tích sản phẩm</a>
                      </li>
                      <li><a href="{{URL::to('/add-dungtich')}}">Thêm dung tích sản phẩm</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Vận chuyển</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/delivery')}}">Quản lý vận chuyển</a>
                      </li>
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-layers"></i><span>Banner</span></a>
                    <ul class="sub-menu">
                      <li><a href="{{URL::to('/manage-banner')}}">Quản lý banner</a>
                      </li>
                      <li><a href="{{URL::to('/add-banner')}}">Thêm banner</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="main-content container-fluid">
            @yield('admin_content')
        </div>
      </div>
    </div>
    <script src="{{asset('public/backend/assets\lib\jquery\jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\js\app.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datetimepicker\js\bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-flot\jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-flot\jquery.flot.pie.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-flot\jquery.flot.time.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-flot\jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-flot\plugins\jquery.flot.orderBars.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-flot\plugins\curvedLines.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-flot\plugins\jquery.flot.tooltip.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery.sparkline\jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\countup\countUp.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery-ui\jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jqvmap\jquery.vmap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jqvmap\maps\jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net\js\jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-bs4\js\dataTables.bootstrap4.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-buttons\js\dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-buttons\js\buttons.flash.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\jszip\jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\pdfmake\pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\pdfmake\vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-buttons\js\buttons.colVis.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-buttons\js\buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-buttons\js\buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-buttons-bs4\js\buttons.bootstrap4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-responsive\js\dataTables.responsive.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\datatables\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\jquery.nestable\jquery.nestable.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\moment.js\min\moment.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\select2\js\select2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\select2\js\select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\bootstrap-slider\bootstrap-slider.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\bs-custom-file-input\bs-custom-file-input.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets\lib\parsley\parsley.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/frontend/js/jquery.form-validator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets/js/config.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets/js/vi.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/backend/assets/js/simple.money.format.js')}}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    
    <script type="text/javascript">
      $('.price_format').simpleMoneyFormat();
    </script>

    <script type="text/javascript">
      CKEDITOR.replace('editor');
      CKEDITOR.replace('editor1');
    </script>

    <script type="text/javascript">
      $(document).ready(function(){

      chart30daysorder();

      var chart = new Morris.Area({
       
          element: 'chart',
          pointFillColors: ['#ffffff'],
          pointStrokeColors: ['black'],
          fillOpacity: 0.3,
          hideHover: 'auto',
          parseTime: false,
          xkey: 'period',
          ykeys: ['order','sales','profit','quantity'],
            labels: ['đơn hàng','doanh số','lợi nhuận','số lượng']
        });

        $('#btn-dashboard-filter').click(function(){
            var _token = $('input[name="_token"]').val();
            var from_date = $('#datepicker').val();
            var to_date = $('#datepicker2').val();

            $.ajax({
                url:"{{url('/filter-by-date')}}",
                method:"POST",
                dataType:"JSON",
                data:{from_date:from_date,to_date:to_date,_token:_token},
                
                success:function(data)
                    {
                        chart.setData(data);
                    }   
            });
        });

        function chart30daysorder(){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{url('/days-order')}}",
                method:"POST",
                dataType:"JSON",
                data:{_token:_token},
                
                success:function(data)
                    {
                        chart.setData(data);
                    }   
            });
        }

        $('.dashboard-filter').change(function(){
        var dashboard_value = $(this).val();
        var _token = $('input[name="_token"]').val();

          $.ajax({
              url:"{{url('/dashboard-filter')}}",
              method:"POST",
              dataType:"JSON",
              data:{dashboard_value:dashboard_value,_token:_token},
              
              success:function(data)
                  {
                      chart.setData(data);
                  }   
            });
        });

        
      });
    </script>

    <script type="text/javascript">
      $('.comment_duyet_btn').click(function(){
        var comment_status = $(this).data('comment_status');
        var comment_id = $(this).data('comment_id');
        var comment_product_id = $(this).attr('id');
        if(comment_status == 0)
        {
          var alert = 'Duyệt thành công';
        }else{
          var alert = 'Bỏ duyệt thành công';
        }
        $.ajax({
            url:'{{url('/allow-comment')}}',
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{comment_status:comment_status,comment_id:comment_id,comment_product_id:comment_product_id},
            success:function(data){
              location.reload();
              $('#notify_comment').html('<span class="text text-alert text-success">'+alert+'</span>');
            }
        });
      });

      $('.btn-reply-comment').click(function(){
        var comment_id = $(this).data('comment_id');
        var comment = $('.reply_comment_'+comment_id).val();
        var comment_product_id = $(this).data('product_id');
        if(comment == '')
        {
          alert('Vui lòng nhập bình luận trả lời')
        }else if(comment.toString().length > 191)
        {
          alert('Bình luận trả lời quá dài. Vui lòng kiểm tra lại')
        }
        else{
          $.ajax({
              url:'{{url('/reply-comment')}}',
              method: 'POST',
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data:{comment:comment,comment_id:comment_id,comment_product_id:comment_product_id},
              success:function(data){
                $('.reply_comment_'+comment_id).val('');
                $('#notify_comment').html('<span class="text text-alert  text-success">Trả lời bình luận thành công</span>');
                location.reload();
              }
          });
        }
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        load_gallery();

        function load_gallery()
        {
          var pro_id =  $('.pro_id').val();
          var _token = $('input[name="_token"]').val();

          $.ajax({
            url:'{{url('/select-gallery')}}',
            method: 'POST',
            data:{pro_id:pro_id,_token:_token},
            success:function(data){
              $('#gallery_load').html(data);
            }
          });
        }

        $('#file').change(function(){
          var error = '';
          var files = $('#file')[0].files;

          if(files.length>5){
            error+='<p>Bạn chỉ có thể chọn tối đa 5 ảnh</p>'
          }else if(files.length=='')
          {
            error+='<p>Bạn không thể để trống ảnh</p>'
          }else if(files.size > 2000000)
          {
            error+='<p>File ảnh không được lớn hơn 2MB</p>'
          }

          if(error=''){


          }else{
            $('file').val('');
            $('#error_gallery').html('<span class="text-danger">'+error+'</span>');
            return false;
          }
        })

        $(document).on('blur','.edit_gal_name', function(){
          var gal_id = $(this).data('gal_id');
          var gal_text = $(this).text();
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url:'{{url('/update-gallery-name')}}',
            method: 'POST',
            data:{gal_id:gal_id,gal_text:gal_text,_token:_token},
            success:function(data){
              load_gallery();
              $('#error_gallery').html('<span class="text-danger">Cập nhật tên hình ảnh thành công</span>');
            }
          });
        });

        $(document).on('click','.delete-gallery', function(){
          var gal_id = $(this).data('gal_id');
          var _token = $('input[name="_token"]').val();
          if(confirm('Bạn có chắc là muốn xóa hình ảnh này ?')){
            $.ajax({
              url:'{{url('/delete-gallery')}}',
              method: 'POST',
              data:{gal_id:gal_id,_token:_token},
              success:function(data){
                load_gallery();
                $('#error_gallery').html('<span class="text-danger">Xóa hình ảnh thành công</span>');
              }
            });
          };
        });

        $(document).on('change','.file_image', function(){
          var gal_id = $(this).data('gal_id');
          var image = document.getElementById('file-'+gal_id).files[0];

          var form_data = new FormData();

          form_data.append("file",document.getElementById('file-'+gal_id).files[0]);
          form_data.append("gal_id",gal_id);

          $.ajax({
            url:'{{url('/update-gallery')}}',
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){
              load_gallery();
              $('#error_gallery').html('<span class="text-danger">Cập nhật hình ảnh thành công</span>');
            }
          });
         
        });
      });
    </script>

    <script type="text/javascript">
      $('.update_quantity_order').click(function(){
        var order_product_id = $(this).data('product_id');
        var order_qty = $('.order_qty_'+order_product_id).val();
        var order_code = $('.order_code').val();
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: '{{url('/update-soluong')}}',
            method: 'POST',
            data:{_token:_token,order_product_id:order_product_id,order_qty:order_qty,order_code:order_code},
            success:function(data){
              alert('Cập nhật số lượng thành công');
              location.reload();
            }
          });
          
      });
    </script>

    <script type="text/javascript">
      $('.order_details').change(function(){
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();

        quantity = [];
        $("input[name='product_sales_quantity']").each(function(){
          quantity.push($(this).val());
        });

        order_product_id=[];
        $("input[name='order_product_id']").each(function(){
          order_product_id.push($(this).val());
        });
        j=0;
        for(i=0; i<order_product_id.length;i++)
        {
          //so luong khach dat
          var order_qty = $('.order_qty_'+order_product_id[i]).val();

          //so luong ton kho
          var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

          if(parseInt(order_qty)>parseInt(order_qty_storage)){
            j = j+1;
            if(j==1)
            {
              alert('Số lượng trong kho không đủ');
            }
          }
        }
        if(j==0)
        {
          $.ajax({
              url: '{{url('/update-donhang-soluong')}}',
              method: 'POST',
              data:{_token:_token,order_status:order_status,order_id:order_id,quantity:quantity,order_product_id:order_product_id},
              success:function(data){
                alert('Thay đổi tình trạng đơn hàng thành công');
                location.reload();
              }
            });
        }
      });
    </script>

    <script type="text/javascript">
      $('.order_details_huy').change(function(){
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();

        quantity = [];
        $("input[name='product_sales_quantity']").each(function(){
          quantity.push($(this).val());
        });

        order_product_id=[];
        $("input[name='order_product_id']").each(function(){
          order_product_id.push($(this).val());
        });
        j=0;
        for(i=0; i<order_product_id.length;i++)
        {
          //so luong khach dat
          var order_qty = $('.order_qty_'+order_product_id[i]).val();

          //so luong ton kho
          var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

          if(parseInt(order_qty)>parseInt(order_qty_storage)){
            j = j+1;
            if(j==1)
            {
              alert('Số lượng trong kho không đủ');
            }
          }
        }
        if(j==0)
        {
          $.ajax({
              url: '{{url('/huy-don-hang-manage')}}',
              method: 'POST',
              data:{_token:_token,order_status:order_status,order_id:order_id,quantity:quantity,order_product_id:order_product_id},
              success:function(data){
                alert('Hủy đơn hàng thành công');
                location.reload();
              }
            });
        }
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        fetch_delivery();
        function fetch_delivery(){
          var _token = $('input[name="_token"]').val();
          $.ajax({
            url: '{{url('/select-phivanchuyen')}}',
            method: 'POST',
            data:{_token:_token},
            success:function(data){
              $('#load_delivery').html(data);
            }
          });
        }
        $(document).on('blur','.phivanchuyen_edit',function(){
          var phivanchuyen_ma = $(this).data('vc_ma');
          var phivanchuyen_giatri = $(this).text();
          var _token = $('input[name="_token"]').val();
          /* alert(phivanchuyen_ma);
          alert(phivanchuyen_giatri); */
          var regex=/^[0-9]+$/;
          if( phivanchuyen_giatri.match(regex))
          {
            alert('Vui lòng nhập số')
          }
          else{
            $.ajax({
              url: '{{url('/update-phivanchuyen')}}',
              method: 'POST',
              data:{phivanchuyen_ma:phivanchuyen_ma,phivanchuyen_giatri:phivanchuyen_giatri,_token:_token},
              success:function(data){
                alert('Cập nhật phí vận chuyển thành công');
                fetch_delivery();
              }
            });
          }
        })
        $('.add_vanchuyen').click(function(){
          var thanhpho = $('.thanhpho').val();
          var maqh = $('.quanhuyen').val();
          var phivanchuyen = $('.phivanchuyen').val();
          var _token = $('input[name="_token"]').val();
          if(phivanchuyen == '')
          {
            alert('Vui lòng nhập phí vận chuyển');
          }else if(parseInt(phivanchuyen)<0)
          {
            alert('Phí vận chuyển không thể nhỏ hơn 0')
          }else if(thanhpho == '')
          {
            alert('Vui lòng chọn tỉnh thành phố');
          }else if(maqh == '')
          {
            alert('Vui lòng chọn quận huyện');
          }
          else{
            $.ajax({
              url: '{{url('/insert-delivery')}}',
              method: 'POST',
              data:{thanhpho:thanhpho,maqh:maqh,phivanchuyen:phivanchuyen,_token:_token},
              success:function(data){
                alert('Thêm phí vận chuyển thành công');
                fetch_delivery();
              }
            });
          }
        });

          $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if(action=='thanhpho')
            {
              result = 'quanhuyen';
            }
            $.ajax({
              url: '{{url('/select-delivery')}}',
              method: 'POST',
              data:{action:action,ma_id:ma_id,_token:_token},
              success:function(data){
                $('#'+result).html(data);
              }
            });
          });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.formElements();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
        App.dashboard();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	$('form').parsley();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>
  </body>
</html>