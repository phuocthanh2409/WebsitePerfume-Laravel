@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách phiếu nhập</h2>
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
              <th>Tên nhà cung cấp</th>
              <th>Mô tả phiếu nhập</th>
              <th>Tổng tiền phiếu nhập</th>
              <th>Ngày nhập</th>
            </tr>
          </thead>
          <tbody>
            @foreach($phieunhap as $key => $pn_pro)
            <tr class="odd gradeX">
              <td>{{$pn_pro->nccTen}}</td>
              <td>{{$pn_pro->pnMoTa}}</td>
              <td>{{$pn_pro->pnTongTien}}</td>
              <td>{{$pn_pro->pnNgayNhap}}</td>
              <td class="actions"><a class="icon" href="{{URL::to('/detail-phieunhap/'.$pn_pro->pnMa)}}"><i class="mdi mdi-library"></i></a></td>
              <td class="actions"><a class="icon" href="{{URL::to('/edit-phieunhap/'.$pn_pro->pnMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-muasanpham/'.$pn_pro->pnMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection