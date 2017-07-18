@extends('layouts.app')

@section('content')


    <section class="content-header">
        <h1>
            Нийтлэл
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Удирдлага</a></li>
            <li class="active">Нийтлэл</li>
        </ol>
    </section>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a href="{{ route('admin.post.create') }}" class="btn btn-info btn-sm">Нэмэх</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Дугаар</th>
                                    <th>Гарчиг</th>
                                    <th>Төрөл</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->getKey() }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->present()->category }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['admin.post.destroy', $post->getKey()], 'method' => 'DELETE', 'class' => 'form-inline', 'id' => 'form-destroyer-' . $post->getKey()]) !!}

                                        <a href="{{ route('admin.post.edit', $post->getKey()) }}" class="btn btn-default btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <button type="submit" class="btn btn-danger btn-xs btn-destroyer" data-target="#form-destroyer-{{ $post->getKey() }}">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection