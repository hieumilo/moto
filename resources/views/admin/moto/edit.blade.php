@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Moto
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Bảng điều kiển</a></li>
        <li><a href="{{ route('category.index') }}">Moto</a></li>
        <li class="active">Cập nhật</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <form action="{{ route('moto.update', 1) }}" method="POST" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <!-- general form elements -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin tổng quát</a>
                </li>
                <li class="">
                  <a href="#tab_2" data-toggle="tab" aria-expanded="false">Chi tiết</a>
                </li>
                <li class="pull-right">
                  <button type="submit" class="btn btn-primary btn-flat">Cập nhật</button>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  <div class="form-group">
                    <label for="">Tên xe</label>
                    <input type="text" class="form-control" id="" name="name" placeholder="Nhập tên xe">
                  </div>
                  <div class="form-group">
                    <label>Danh mục</label>
                    <select class="form-control" name="category">
                      <option value="">Chọn 1 danh mục</option>
                      <option value="1">option 1</option>
                      <option value="2">option 2</option>
                      <option value="3">option 3</option>
                      <option value="4">option 4</option>
                      <option value="5">option 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" id="" name="image[]" multiple>
                  </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  <div class="box box-info collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title">Động cơ</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <textarea id="engine" name="engine" rows="10" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="box box-info collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title">Hệ thống truyền lực</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <textarea id="drive_train" name="drive_train" rows="10" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="box box-info collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title">Khung xe</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <textarea id="frame" name="frame" rows="10" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="box box-info collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title">Hệ thốn giảm sốc</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <textarea id="suspension" name="suspension" rows="10" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="box box-info collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title">Phanh xe(Thắng)</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <textarea id="brakes" name="brakes" rows="10" cols="80"></textarea>
                    </div>
                  </div>
                  <div class="box box-info collapsed-box">
                    <div class="box-header">
                      <h3 class="box-title">Kích thước</h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <textarea id="dimensions" name="dimensions" rows="10" cols="80"></textarea>
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.box -->
          </form>
          

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
<script>
  $(function () {
    CKEDITOR.replace('engine');
    CKEDITOR.replace('drive_train');
    CKEDITOR.replace('frame');
    CKEDITOR.replace('suspension');
    CKEDITOR.replace('brakes');
    CKEDITOR.replace('dimensions');
  })
</script>
@endsection
