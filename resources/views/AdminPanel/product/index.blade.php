@extends('AdminPanel.layout')

@section('pageTitle')
    همه محصولات
@stop

@section('mainContent')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">همه محصولات</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active">محصولات</li>
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
                    @if(session('message'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{ Session::get('message') }}</li>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-success col-sm-3">
                            <li>{{ Session::get('error') }}</li>
                        </div>
                    @endif

                    @if(session('warning'))
                        <div class="alert alert-warning col-sm-3">
                            <li>{{ Session::get('warning') }}</li>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title text-right">جدول محصولات</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(\App\Product::all()->count() > 0)
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام محصول</th>
                                        <th>قیمت</th>
                                        <th>توضیحات محصول</th>
                                        <th>کد محصول</th>
                                        <th>تصویر</th>
                                        <th>دسته بندی</th>
                                        <th>تخفیف</th>
                                        <th>تعداد</th>
                                        <th>سایز</th>
                                        <th>وزن</th>
                                        <th>امتیاز</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($hameye_mahsolat as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>
                                                @if($product->old_price != '')
                                                    {{ $product->price }}

                                                    @else
                                                    <span class="text-secondary">{{ $product->old_price }}</span>
                                                        {{ $product->price }}

                                                @endif
                                            </td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->product_id }}</td>
                                            <td class="text-center">
                                                <img width="100" src="{{ url('') }}{{ config('cms-setting.url') }}/{{ $product->image }}" alt="{{ $product->title }}">
                                            </td>
                                            <td>{{ $product->category_name($product->category) }}</td>
                                            <td>{{ $product->discount }}</td>
                                            <td>{{ $product->count }}</td>
                                            <td>{{ $product->size }}</td>
                                            <td>{{ $product->weight }}</td>
                                            <td>{{ $product->rate }}</td>
                                            <td>
                                                @if($product->status == 0)
                                                    پیش نویس
                                                @else
                                                    منتشر شده
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('dashboard.product.edit' , $product->id) }}" style="color: gray"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="{{ route('dashboard.product.destroy' , $product->id) }}" style="color: red"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            @else
                                <h4>محصولی در سایت موجود نیست</h4>
                                <a class="btn btn-outline-success" href="{{ route('dashboard.product.create') }}">اولین محصول خود را بساز</a>
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

        $('#products').addClass('menu-open');
        $('#products > a').addClass('active');
        $('#allProducts').addClass('active');

    </script>
@stop

