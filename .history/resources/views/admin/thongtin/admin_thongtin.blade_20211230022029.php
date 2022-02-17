@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách dung tích sản phẩm</h2>
        @if (session('error'))
        <div class="alert alert-danger" role="alert">
                {{ session('error') }}
        </div>
        @endif
        
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Tên dung tích sản phẩm</th>
              <th>Mô tả dung tích sản phẩm</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_dungtich as $key => $pro)
            <tr class="odd gradeX">
              <td>{{$pro->dtTen}}</td>
              <td>{{$pro->dtMoTa}}</td>
              <td class="actions" ><a class="icon" href="{{URL::to('/edit-dungtich/'.$pro->dtMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-dungtich/'.$pro->dtMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection