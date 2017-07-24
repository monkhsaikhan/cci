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
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="pull-right">
                            <a href="{{ route('admin.page.create') }}" class="btn btn-info btn-sm">Нэмэх</a>
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
                                    <th>Үндсэн хуудас <button class="fa fa-save" onclick="saveCurrent()"></button> </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <td>{{ $page->getKey() }}</td>
                                        <td>{{ $page->title }}</td>
                                        <td><input type="radio" name="is_current" class="select_current" value="{{ $page->getKey() }}" {{ $page->is_current == 1 ? 'checked=checked' : '' }} /></td>
                                        <td>
                                            {!! Form::open(['route' => ['admin.page.destroy', $page->getKey()], 'method' => 'DELETE', 'class' => 'form-inline', 'id' => 'form-destroyer-' . $page->getKey()]) !!}

                                            <a href="{{ route('admin.page.edit', $page->getKey()) }}" class="btn btn-default btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-xs btn-destroyer" data-target="#form-destroyer-{{ $page->getKey() }}">
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
                        {!! $pages->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

    <script>

        function saveCurrent()
        {
            alert($('.select_current:checked').val());
        }

    </script>

@endsection