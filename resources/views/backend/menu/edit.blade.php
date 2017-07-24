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
            <div class="col-lg-6">
                <div class="box">
                {!! Form::open(['class' => 'form-horizontal', 'route' => ['admin.car.update', $menu->getKey()], 'method' => 'PATCH', 'files' => true]) !!}
                <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Нэр</label>

                            <div class="col-sm-10">
                                {!! Form::text('name', $menu->name, ['class' => 'form-control', 'placeholder' => 'Нэр']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Байршил</label>

                            <div class="col-sm-10">
                                {!! Form::text('position', $menu->position, ['class' => 'form-control', 'placeholder' => 'Байршил']) !!}
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