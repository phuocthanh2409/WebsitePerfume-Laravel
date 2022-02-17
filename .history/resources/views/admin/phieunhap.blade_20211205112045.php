@extends('admin_layout')
@section('admin_content')
@foreach($all_nhacungcap as $key => $ncc_pro)
<tr class="odd gradeX">
  <td>{{$ncc_pro->nccTen}}</td>
  <td>{{$ncc_pro->nccSoDienThoai}}</td>
  <td>{{$ncc_pro->nccDiaChi}}</td>
  <td class="actions" ><a class="icon" href="{{URL::to('/edit-nhacungcap/'.$ncc_pro->nccMa)}}"><i class="mdi mdi-edit"></i></a></td>
  <td class="actions"><a class="icon" onclick="return confirm('Bạn có chắc là muốn xóa ?')" href="{{URL::to('/delete-nhacungcap/'.$ncc_pro->nccMa)}}"><i class="mdi mdi-delete"></i></a></td>
</tr>
@endforeach
@endsection