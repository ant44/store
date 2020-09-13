@extends('AdminPanel.layout')

@section('pageTitle')
    داشبورد Dashboard
@stop

@section('mainContent')
    محتوای صفحه ی داشبورد
@stop

@section('footerScripts')
    <script src="">
        $('.nav-link').removeClass('active');
        $('#dashboard').addClass('active');
        $('#dashboard > a').addClass('active');

    </script>

@endsection
