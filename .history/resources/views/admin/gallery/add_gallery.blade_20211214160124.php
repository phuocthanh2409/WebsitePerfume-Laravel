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
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">

        </div>
      </div>
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