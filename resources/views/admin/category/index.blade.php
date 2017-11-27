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
        <li class="active">Danh mục sản phẩm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách</h3>
              <a class="btn btn-default pull-right" href="{{ route('category.create') }}">Thêm mới</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên danh mục</th>
                  <th>Tạo/Cập nhật</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->updated_at }}</td>
                      <td>
                        <a class="btn btn-default" href="{{ route('category.edit', $category->id) }}">Chỉnh sửa</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: inline;">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="submit" class="btn btn-default" value="Xóa">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Tên danh mục</th>
                  <th>Tên danh mục</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
  <script>
    $(function () {
      $('#example1').DataTable();
    })
    @if (session('message'))
      swal({
        type: 'success',
        title: '{{ session('message') }}',
        showConfirmButton: false,
        timer: 2500
      })
    @endif
  </script>
@endsection
