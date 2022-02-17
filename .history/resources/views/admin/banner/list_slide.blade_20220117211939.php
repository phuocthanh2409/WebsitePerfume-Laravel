@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">
        <h2>Danh sách banner</h2>
      </div>
      <div class="card-body">
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
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Tên slide</th>
              <th>Hình ảnh</th>
              <th>Mô tả</th>
              <th>Trạng thái</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_slide as $key => $slide)
            <tr class="odd gradeX">
              <td>{{$slide->sliderTen}}</td>
              <td><img src="public/uploads/banner/{{$slide->sliderHinhAnh}}" height="150" width="200"></td>
              <td>{!!$slide->sliderMoTa!!}</td>
              <td class="actions">
                <?php
                  if($slide->sliderTrangThai == 1){
                ?>
                  <a href="{{URL::to('/unactive-banner/'.$slide->sliderMa)}}" class="icon"><span class="mdi mdi-check" style="color:green"></span></a>
                  <?php 
                  }else{
                  ?>
                  <a href="{{URL::to('/active-banner/'.$slide->sliderMa)}}" class="icon"><span class="mdi mdi-close" style="color:red"></a>
                  <?php
                  }
                ?>
              </td>
              <td class="actions"><a class="icon" href="{{URL::to('/edit-banner/'.$slide->sliderMa)}}"><i class="mdi mdi-edit"></i></a></td>
              <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-banner/'.$slide->sliderMa)}}"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection