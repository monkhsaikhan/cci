@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Цэс
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Удирдлага</a></li>
            <li class="active">Цэс</li>
        </ol>
    </section>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a href="{{ route('admin.menu.create') }}" class="btn btn-info btn-sm">Нэмэх</a>
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
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menus as $menu)
                                    <tr>
                                        <td>{{ $menu->getKey() }}</td>
                                        <td>{{ $menu->name }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['admin.menu.destroy', $menu->getKey()], 'method' => 'DELETE', 'class' => 'form-inline', 'id' => 'form-destroyer-' . $menu->getKey()]) !!}

                                            <a href="{{ route('admin.menu.item.index', $menu->getKey()) }}" class="btn btn-default btn-xs">
                                                <i class="fa fa-list-ol"></i>
                                            </a>

                                            <a href="{{ route('admin.menu.edit', $menu->getKey()) }}" class="btn btn-default btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-xs btn-destroyer" data-target="#form-destroyer-{{ $menu->getKey() }}">
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