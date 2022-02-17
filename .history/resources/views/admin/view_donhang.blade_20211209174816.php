@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Thông tin người mua
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>Tên người mua</th>
              <th>Số điện thoại</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Penelope Thornton</td>
              <td>23/06/2018</td>
              <td>60%</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Thông tin vận chuyển
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
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
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
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection