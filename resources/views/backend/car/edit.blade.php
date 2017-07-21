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
            <div class="col-lg-6">
                <div class="box">
                {!! Form::open(['class' => 'form-horizontal', 'route' => ['admin.car.update', $car->getKey()], 'method' => 'PATCH', 'files' => true]) !!}
                <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Гарчиг</label>

                            <div class="col-sm-10">
                                {!! Form::text('name', $car->name, ['class' => 'form-control', 'placeholder' => 'Гарчиг']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Төрөл зүйл</label>

                            <div class="col-sm-10">
                                {!! Form::text('attribute', $car->attribute, ['class' => 'form-control', 'placeholder' => 'Төрөл зүйл']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Зураг</label>

                            <div class="col-sm-10">
                                {!! Form::file('picture') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Үнэ</label>

                            <div class="col-sm-10">
                                {!! Form::text('price', $car->price, ['class' => 'form-control', 'placeholder' => 'Төрөл зүйл']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Хаяг</label>

                            <div class="col-sm-10">
                                {!! Form::text('link', $car->link, ['class' => 'form-control', 'placeholder' => 'Хаяг']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Хадгалах</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection