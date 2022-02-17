@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Danh sách loại sản phẩm
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Tên loại sản phẩm</th>
              <th>Mô tả loại sản phẩm</th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_loaisanpham as $key => $cate_pro)
            <tr class="odd gradeX">
              <td>{{$cate_pro->$loaiTen}}</td>
              <td>Win 95+</td>
              <td class="actions"><a class="icon" href="#"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection