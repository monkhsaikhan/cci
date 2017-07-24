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
                            <a href="{{ route('admin.menu.item.create', $menu->getKey()) }}" class="btn btn-info btn-sm">Нэмэх</a>
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
                                    <th>Холбоос</th>
                                    <th>Root</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($menu->items as $item)
                                    <tr>
                                        <td>{{ $item->getKey() }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->link }}</td>
                                        <td></td>
                                        <td>
                                            {!! Form::open(['route' => ['admin.menu.item.destroy', $menu->getKey(), $item->getKey()], 'method' => 'DELETE', 'class' => 'form-inline', 'id' => 'form-destroyer-' . $item->getKey()]) !!}

                                            <a href="{{ route('admin.menu.item.edit', [$menu->getKey(), $item->getKey()]) }}" class="btn btn-default btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-xs btn-destroyer" data-target="#form-destroyer-{{ $item->getKey() }}">
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