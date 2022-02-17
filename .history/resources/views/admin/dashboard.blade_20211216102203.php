@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">
    <style type="text/css">
        p.title_thongke {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

    </style>
    <div >
        <p class="title_thongke">Thống kê đơn hàng doanh số</p>

        <form autocomplete="off" style="display: flex;">
            @csrf
            <div class="col-md-2">
                <p>Từ ngày: <input type="text" id="datepicker" class="form-control input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd"></p>

                <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-big form-control" value="Lọc kết quả"></p>

            </div>

            <div class="col-md-2">
                <p>Đến ngày: <input type="text" id="datepicker2" class="form-control input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd"></p>

            </div>

            <div class="col-md-2">
                <p>
                    Lọc theo:
                    <select class="dashboard-filter form-control">
                        <option>--Chọn--</option>
                        <option value="7ngay">7 ngày qua</option>
                        <option value="thangtruoc">tháng trước</option>
                        <option value="thangnay">tháng này</option>
                        <option value="365ngayqua">365 ngày qua</option>
                    </select>
                </p>
            </div>

        </form>

        <div class="col-md-12"  style="padding-top: 30px;">
            <div id="chart" style="height: 250px;"></div>
        </div>

    </div>

    <div class="row" style="place-content: center; padding-top:40px">
        <style type="text/css">
            table.table.table-bordered.table-dark {
                background: #fff;
            }

            table.table.table-bordered.table-dark tr th {
                color: black;
            }

        </style>

        <p class="title_thongke">Thống kê truy cập</p>

        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">Đang online</th>
                    <th scope="col">Tổng tháng trước</th>
                    <th scope="col">Tổng tháng này</th>
                    <th scope="col">Tổng một năm</th>
                    <th scope="col">Tổng truy cập</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$visitor_count}}</td>
                    <td>{{$visitor_last_month_count}}</td>
                    <td>{{$visitor_this_month_count}}</td>
                    <td>{{$visitor_year_count}}</td>
                    <td>{{$visitors_total}}</td>
                </tr>

            </tbody>
        </table>

    </div>

</div>

@endsection
