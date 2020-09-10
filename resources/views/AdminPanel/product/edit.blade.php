@extends('AdminPanel.layout')

@section('pageTitle')
    افزودن محصول جدید
@stop

@section('mainContent')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">افزودن محصول جدید</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">داشبورد</a></li>
                        <li class="breadcrumb-item active">محصول جدید</li>
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
                            <h3 class="card-title">مشخصات محصول</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="POST" action="{{ route('dashboard.product.update' , $product->id ) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- product -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>نام محصول</label>
                                            <input type="text" class="form-control" name="title" value="{{ $product->title ?? '' }}" placeholder="نام محصول">
                                        </div>
                                    </div>
                                    <!-- category -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>دسته بندی محصول</label>
                                            <select class="form-control" name="category">
{{--                                                <option value="0">دسته بندی نشده ها</option>--}}
                                                @foreach($allCategories as $category)
                                                    @if($product->category == $category->id)
                                                        <option value="{{ $category->id }}" selected>{{ $category->topic }}</option>
                                                    @else
                                                        <option value="{{ $category->id }}">{{ $category->topic }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- price -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>قیمت اصلی</label>
                                            <input type="number" name="price" class="form-control" value="{{ $product->price }}" placeholder="قیمت محصول بدون تخفیف">
                                        </div>
                                    </div>
                                    <!-- old price -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>قیمت تخفیف خورده</label>
                                            <input type="number" name="old_price" class="form-control" value="{{ $product->old_price }}" placeholder="قیمت محصول با تخفیف">
                                        </div>
                                    </div>
                                    <!-- productID -->
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>آیدی محصول</label>
                                            <input type="number" name="product_id" disabled class="form-control" value="{{ $product->product_id }}" placeholder="آیدی یونیک محصول">
                                        </div>
                                    </div>
                                    <!-- Image -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="image">عکس محصول</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input">
                                                    <label class="custom-file-label" for="image">انتخاب</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- discount -->
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>درصد تخفیف</label>
                                            <input type="text" name="discount" class="form-control" value="{{ $product->discount }}" placeholder="درصد تخفیف برای محصول">
                                        </div>
                                    </div>
                                    <!-- count -->
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>تعداد</label>
                                            <input type="number" name="count" class="form-control" value="{{ $product->count  }}" placeholder="تعداد محصول">
                                        </div>
                                    </div>
                                    <!-- size -->
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>سایز</label>
                                            <input type="text" name="size" class="form-control" value="{{ $product->size }}" placeholder="سایز محصول">
                                        </div>
                                    </div>
                                    <!-- weight -->
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>وزن</label>
                                            <input type="text" name="weight" class="form-control" value="{{ $product->weight }}" placeholder="وزن محصول">
                                        </div>
                                    </div>
                                    <!-- status -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>وضعیت نمایش</label>
                                            <select class="form-control" name="status">
                                                @if($product->status == 0)
                                                    <option value="0" selected >پیش نویس</option>
                                                    <option value="1" >انتشار</option>
                                                @else
                                                    <option value="0">پیش نویس</option>
                                                    <option value="1" selected >انتشار</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <!-- description -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>توضیحات</label>
                                            <textarea class="form-control" name="description" rows="5" placeholder="توضیحات محصول را در این قسمت وارد کنید">{{ $product->description }}</textarea>
                                        </div>
                                    </div>

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

        $('#products').addClass('menu-open');
        $('#products > a').addClass('active');
        $('#new-product').addClass('active');

    </script>
@stop
