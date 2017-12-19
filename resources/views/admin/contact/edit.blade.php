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
                <li><a href="{{ route('contact.index') }}">Liên hệ</a></li>
                <li class="active">Chi tiết</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cập nhật</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('contact.update', $contact->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="">Tên</label>
                                            <span class="form-control">{{ $contact->name }}</span>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="">Số điện thoại</label>
                                            <span class="form-control">{{ $contact->phone }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <span class="form-control">{{ $contact->email }}</span>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="">Địa chỉ</label>
                                            <span class="form-control">{{ $contact->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="">Nội dung</label>
                                    <span class="form-control">{!! $contact->content !!}</span>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="{{ route('contact.index') }}" class="btn btn-default btn-flat">Quay lại</a>
                                @if ($contact->status == 0)
                                    <button type="submit" class="btn btn-primary btn-flat pull-right">Chấp nhận</button>
                                @endif
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
