@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm thư viện ảnh</h2>
        <?php 
        $message = Session::get('message');
        if($message){
            echo '<div class="alert alert-danger alert-simple alert-dismissible" style="border: none;-webkit-box-shadow: none; box-shadow: none; font-size: 15px; color: red;">',$message.'</div>';
            Session::put('message',null);
        }
        ?>
      </div>
      <form action="{{('/insert-gallery/'.{{$pro_id}})}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="col-md-3" style="align: right;">

        </div>
        <div class="col-md-6">
          <input type="file" class="form-control" name="file[]" accept="image/*">
        </div>
      </div>
    </form>
      <div class="card-body">
        <input type="hidden" value="{{$pro_id}}" name="pro_id" class="pro_id">
        <form>
          @csrf
          <div id="gallery_load">

          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection