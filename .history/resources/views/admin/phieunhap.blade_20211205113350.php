@extends('admin_layout')
@section('admin_content')
@foreach($all_thuonghieu as $key => $brand_pro)
            <tr class="odd gradeX">
              <td>{{$brand_pro->thTen}}</td>
              
            </tr>
            @endforeach
@endsection