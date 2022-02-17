@extends('admin_layout')
@section('admin_content')
<div class="row">
  <div class="col-sm-12">
    <div class="card card-table">
      <div class="card-header">Danh sách loại sản phẩm
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover table-fw-widget" id="table5">
          <thead>
            <tr>
              <th>Tên loại sản phẩm</th>
              <th>Mô tả loại sản phẩm</th>
            </tr>
          </thead>
          <tbody>
            <tr class="odd gradeX">
              <td>Trident</td>
              <td>Win 95+</td>
              <td class="actions"><a class="icon" href="#"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            {{-- <tr class="even gradeC">
              <td>Trident</td>
              <td>
                Internet
                Explorer 5.0
              </td>
              <td>Win 95+</td>
              <td class="center">5</td>
              <td class="center">C</td>
            </tr>
            <tr class="odd gradeA">
              <td>Trident</td>
              <td>
                Internet
                Explorer 5.5
              </td>
              <td>Win 95+</td>
              <td class="center">5.5</td>
              <td class="center">A</td>
            </tr>
            <tr class="even gradeA">
              <td>Trident</td>
              <td>
                Internet
                Explorer 6
              </td>
              <td>Win 98+</td>
              <td class="center">6</td>
              <td class="center">A</td>
            </tr>
            <tr class="odd gradeA">
              <td>Trident</td>
              <td>Internet Explorer 7</td>
              <td>Win XP SP2+</td>
              <td class="center">7</td>
              <td class="center">A</td>
            </tr>
            <tr class="even gradeA">
              <td>Trident</td>
              <td>AOL browser (AOL desktop)</td>
              <td>Win XP</td>
              <td class="center">6</td>
              <td class="center">A</td>
            </tr>
            <tr class="gradeA">
              <td>Gecko</td>
              <td>Firefox 1.0</td>
              <td>Win 98+ / OSX.2+</td>
              <td class="center">1.7</td>
              <td class="center">A</td>
            </tr> --}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection