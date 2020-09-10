@extends('AdminPanel.layout')

@section('pageTitle')
    افزودن دسته بندی جدید
@stop


@section('mainContent')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن دسته بندی جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active">دسته بندی جدید</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements disabled -->

                    <div class="col-sm-12">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger col-sm-3">
                                <li>{{ $error }}</li>
                            </div>
                        @endforeach
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">مشخصات دسته بندی جدید</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('dashboard.productCategory.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- topic -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>نام دسته بندی</label>
                                            <input type="text" class="form-control" name="topic" value="{{ old('topic') }}" placeholder="نام دسته بندی">
                                        </div>
                                    </div>
                                    <!-- Parent_id -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>انتخاب دسته بندی</label>
                                            <select class="form-control" name="parent_id">
                                                <option value="0">دسته بندی مادر</option>
                                                @foreach($allCategories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->topic }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="image">عکس دسته بندی</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input">
                                                    <label class="custom-file-label" for="image">انتخاب</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- status -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>وضعیت نمایش</label>
                                            <select class="form-control" name="status">
                                                <option value="0">پیش نویس</option>
                                                <option value="1">انتشار</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- description -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>توضیحات</label>
                                            <textarea class="form-control" name="description" rows="5" placeholder="توضیحات دسته بندی خود را در این قسمت وارد کنید"></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="ذخیره">
                                            <a class="btn btn-danger" href="{{ route('dashboard') }}">لغو عملیات</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop

@section('footerScripts')
    <!-- bs-custom-file-input -->
    <script src="{{ url('AdminPanel/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script !src="">
        $('.nav-link').removeClass('active');

        $('#categories').addClass('menu-open');
        $('#categories > a').addClass('active');
        $('#new-category').addClass('active');
    </script>
@stop
