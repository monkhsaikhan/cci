@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Машин
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Удирдлага</a></li>
            <li class="active">Машин</li>
        </ol>
    </section>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a href="{{ route('admin.car.create') }}" class="btn btn-info btn-sm">Нэмэх</a>
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
                                    <th>Төрөл, зүйл</th>
                                    <th>Үнэ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $car->getKey() }}</td>
                                        <td>{{ $car->name }}</td>
                                        <td>{{ $car->attribute }}</td>
                                        <td>{{ $car->price }}</td>
                                        <td>
                                            {!! Form::open(['route' => ['admin.car.destroy', $car->getKey()], 'method' => 'DELETE', 'class' => 'form-inline', 'id' => 'form-destroyer-' . $car->getKey()]) !!}

                                            <a href="{{ route('admin.car.edit', $car->getKey()) }}" class="btn btn-default btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-xs btn-destroyer" data-target="#form-destroyer-{{ $car->getKey() }}">
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
                    <div class="box-footer">
                        {!! $cars->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection