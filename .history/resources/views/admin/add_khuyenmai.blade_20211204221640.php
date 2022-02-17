@extends('admin_layout')
@section('admin_content')
{{-- <div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">
        <h2>Thêm khuyến mãi</h2>
      </div>
      <div class="card-body">
        <form action="{{URL::to('/save-khuyenmai')}}" method="POST">
          {{ csrf_field() }}
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Tên khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <input class="form-control" id="inputText3" type="text" placeholder="Tên khuyến mãi" name="khuyenmai_ten" required="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Mô tả khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <textarea rows="10" class="form-control" id="inputTextarea3" placeholder="Mô tả khuyến mãi" name="khuyenmai_mota" required=""></textarea>
            </div>
          </div>
          <div class="form-group row pt-1">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Giá trị khuyến mãi</label>
            <div class="col-12 col-sm-8 col-lg-6">
              <select class="form-control" name="khuyenmai_giatri">
                <option value="1" selected="">10%</option>
                <option value="2">20%</option>
                <option value="3">30%</option>
                <option value="4">40%</option>
                <option value="5">50%</option>
                <option value="6">60%</option>
                <option value="7">70%</option>
                <option value="8">80%</option>
                <option value="9">90%</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Ngày bắt đầu</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd">
                <input class="form-control" size="16" type="text" placeholder="DD-MM-YYYY" name="khuyenmai_ngaybatdau">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Ngày kết thúc</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd">
                <input class="form-control" size="16" type="text" placeholder="DD-MM-YYYY" name="khuyenmai_ngayketthuc">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group now">
            <div class="col-12 col-sm-8 col-lg-6">
              <p class="text-right">
                <button class="btn btn-space btn-primary" type="submit">Thêm khuyến mãi</button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
<div class="row">
  <div class="col-md-12">
    <div class="card card-border-color card-border-color-primary">
      <div class="card-header card-header-divider">Date Picker<span class="card-subtitle">Datepicker bootstrap plugin</span></div>
      <div class="card-body">
        <form>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right"> Default</label>
            <div class="col-12 col-sm-8 col-lg-6 pt1">
              <input class="form-control datetimepicker" type="text" value="">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right"> Read Only</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="" readonly="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right"> Only Date </label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Decade View</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-start-view="4" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Year View</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-start-view="3" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Month View</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-start-view="2" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Day View</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Hour View</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Day View Meridian</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-show-meridian="true" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Hour View Meridian</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-show-meridian="true" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" size="16" type="text" value="">
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection