@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh mục sản phẩm
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Bảng điều kiển</a></li>
        <li><a href="{{ route('category.index') }}">Danh mục sản phẩm</a></li>
        <li class="active">Cập nhật</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cập nhật</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('category.update', $category->id) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PUT">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Danh Mục</label>
                  <input type="text" class="form-control" id="" name="name" value="{{ $category->name }}" placeholder="Nhập danh mục sản phẩm">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ route('category.index') }}" class="btn btn-default btn-flat">Quay lại</a>
                <button type="submit" class="btn btn-primary btn-flat pull-right">Cập nhật</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
@endsection
