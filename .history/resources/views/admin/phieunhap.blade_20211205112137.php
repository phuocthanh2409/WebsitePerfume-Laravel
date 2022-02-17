@extends('admin_layout')
@section('admin_content')
@foreach($index as $key => $ncc_pro)
  <span>{{ncc_pro}}</span>
@endforeach
@endsection