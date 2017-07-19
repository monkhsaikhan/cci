@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Хуудас
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Удирдлага</a></li>
            <li class="active">Нийтлэл</li>
        </ol>
    </section>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <page></page>

    </section>

@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('vendor/tinymce/tiny_mce.js')}}"></script>
@endsection