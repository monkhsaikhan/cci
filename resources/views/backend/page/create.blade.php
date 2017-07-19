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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.3.4/tinymce.min.js"></script>