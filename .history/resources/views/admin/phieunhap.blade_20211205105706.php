@extends('admin_layout')
@section('admin_content')
  @foreach ($index as $key => $value) {
    <?php 
      print_r(value);
    ?>
  }
  @endforeach
@endsection