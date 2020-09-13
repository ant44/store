@extends('AdminPanel.layout')

@section('pageTitle')
    دسته بندی محصولات
@stop

@section('mainContent')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه دسته بندی های محصولات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active">دسته بندی ها</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('message'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{ Session::get('message') }}</li>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{ Session::get('error') }}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title text-right">جدول دسته بندی ها</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (\App\ProductCategory::all()->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام دسته بندی</th>
                                            <th>slug</th>
                                            <th>توضیحات</th>
                                            <th>تصویر</th>
                                            <th>دسته بندی پدر</th>
                                            <th>وضعیت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allCategory as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->topic }}</td>
                                                <td>{{ $category->slug }}</td>
                                                <td>{{ $category->description }}</td>
                                                <td>
                                                    <img width="100" src="{{ url('');
                                                    __BLADE__;
                                                    __BLADE__;
                                                    config('cms-setting.url_product_category');
                                                    __BLADE__;
                                                    __BLADE__;
                                                    $category->image }}" alt="{{ $category->topic }}">
                                                </td>
                                                <td>{{ $category->parent_name($category->parent_id) }}</td>
                                                <td>
                                                    @if ($category->status == 0)
                                                        پیش نویس
                                                    @else
                                                        منتشر شده
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <a
                                                        href="{{ route('admin.product.findProduct', $category->id) }}">ویرایش</a>--}}
                                                    <a href="#" style="color: gray"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="#" style="color: red"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            @else
                                <h4>دسته بندی در سایت موجود نیست</h4>
                                <a class="btn btn-outline-success" href="{{ route('dashboard.product.create') }}">اولین دسته
                                    بندی خود را بساز</a>
                            @endif
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop


@section('footerScripts')

    <!-- DataTables -->
    <script src="{{ url('AdminPanel/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('AdminPanel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('AdminPanel/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('AdminPanel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#categories').addClass('menu-open');
        $('#categories > a').addClass('active');
        $('#allCategories').addClass('active');

    </script>
@stop
