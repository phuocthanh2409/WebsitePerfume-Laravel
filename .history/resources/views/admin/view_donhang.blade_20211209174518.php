@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Chi tiết đơn hàng
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th style="width:50%;">Name</th>
              <th style="width:10%;">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Penelope Thornton</td>
              <td>23/06/2018</td>
              <td class="number">60%</td>
              <td class="number">639</td>
              <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection