@extends('admin_layout')
@section('admin_content')
<div class="row">
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
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="dd-mm-yyy">
                <input class="form-control" size="16" type="text" placeholder="dd-mm-yyyy" name="khuyenmai_ngaybatdau" required>
                <div class="input-group-append">
                  <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label text-sm-right">Ngày kết thúc</label>
            <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
              <div class="input-group date datetimepicker" data-min-view="2" data-date-format="dd-mm-yyyy">
                <input class="form-control" size="16" type="text" placeholder="dd-mm-yyyy" name="khuyenmai_ngayketthuc" required>
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
</div>
<div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 813.6px; z-index: 1101; display: block; top: 6342.3px;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="icon mdi mdi-chevron-left"></span> </th><th colspan="5" class="switch">5 October 2021</th><th class="next" style="visibility: visible;"><span class="icon mdi mdi-chevron-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="minute active">0:00</span><span class="minute">0:05</span><span class="minute">0:10</span><span class="minute">0:15</span><span class="minute">0:20</span><span class="minute">0:25</span><span class="minute">0:30</span><span class="minute">0:35</span><span class="minute">0:40</span><span class="minute">0:45</span><span class="minute">0:50</span><span class="minute">0:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="icon mdi mdi-chevron-left"></span> </th><th colspan="5" class="switch">5 October 2021</th><th class="next" style="visibility: visible;"><span class="icon mdi mdi-chevron-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="hour active">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour">18:00</span><span class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="icon mdi mdi-chevron-left"></span> </th><th colspan="5" class="switch">October 2021</th><th class="next" style="visibility: visible;"><span class="icon mdi mdi-chevron-right"></span> </th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day">1</td><td class="day">2</td></tr><tr><td class="day">3</td><td class="day">4</td><td class="day active">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td></tr><tr><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td></tr><tr><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td></tr><tr><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td></tr><tr><td class="day">31</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="icon mdi mdi-chevron-left"></span> </th><th colspan="5" class="switch">2021</th><th class="next" style="visibility: visible;"><span class="icon mdi mdi-chevron-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month active">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="icon mdi mdi-chevron-left"></span> </th><th colspan="5" class="switch">2020-2029</th><th class="next" style="visibility: visible;"><span class="icon mdi mdi-chevron-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2019</span><span class="year">2020</span><span class="year active">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year old">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr></tfoot></table></div></div>
@endsection