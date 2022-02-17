@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách bình luận</h2>
        <?php 
        $message = Session::get('message');
        if($message){
            echo '<div class="alert alert-danger alert-simple alert-dismissible" style="border: none;-webkit-box-shadow: none; box-shadow: none; font-size: 15px; color: red;">',$message.'</div>';
            Session::put('message',null);
        }
      ?>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Duyệt</th>
              <th>Tên người gửi</th>
              <th>Bình luận</th>
              <th>Ngày gửi</th>
              <th>Sản phẩm</th>
              <th>Sửa bình luận</th>
              <th>Xóa bình luận</th>
            </tr>
          </thead>
          <tbody>
            @foreach($comment as $key => $com)
            <tr class="odd gradeX">
              <td>
                @if($com->blTrangThai==1)
                <input type="button" data-comment_id ="{{$com->blMa}}" id="{{$com->spMa}}" class="btn btn-primary btn-xs comment_duyet_btn" value="Duyệt" >
                @else
                <input type="button" data-comment_id ="{{$com->blMa}}" id="{{$com->spMa}}" class="btn btn-danger btn-xs comment_boduyet_btn" value="Bỏ duyệt" >
                @endif
              </td>
              <td>{{$com->blTen}}</td>
              <td>{{$com->blNoiDung}}
                <br><a href="#">Trả lời</a>
                <br><textarea name="" id="" cols="30" rows="3"></textarea>
              </td>
              <td>{{$com->blNgay}}</td>
              <td><a href="{{url('/chi-tiet-san-pham/'.$com->product->spMa)}}" target="_blank">{{$com->product->spTen}}</a></td>
              <td class="actions"><a class="icon" href=""><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href=""><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection