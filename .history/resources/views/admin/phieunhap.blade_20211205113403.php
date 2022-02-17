@extends('admin_layout')
@section('admin_content')
@foreach($index as $key => $brand_pro)
            <tr class="odd gradeX">
              <td>{{$brand_pro->}}</td>
              
            </tr>
            @endforeach
@endsection