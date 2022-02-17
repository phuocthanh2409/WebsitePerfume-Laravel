@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Chi tiết đơn hàng
        <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
          <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th style="width:50%;">Name</th>
              <th style="width:10%;">Date</th>
              <th class="number">Rate</th>
              <th class="number">Sales</th>
              <th class="actions"></th>
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
            <tr>
              <td>Justine Myranda</td>
              <td>15/05/2018</td>
              <td class="number">23%</td>
              <td class="number">235</td>
              <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            <tr>
              <td>Benji Harper</td>
              <td>10/03/2018</td>
              <td class="number">79%</td>
              <td class="number">728</td>
              <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            <tr>
              <td>Sherwood Clifford</td>
              <td>18/01/2018</td>
              <td class="number">18%</td>
              <td class="number">135</td>
              <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection