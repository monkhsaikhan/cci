@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>
            Хэрэглэгч
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Удирдлага</a></li>
            <li class="active">Хэрэглэгч</li>
        </ol>
    </section>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-lg-4">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        @if(!is_null($user))
                            @include('backend.users.edit')
                        @else
                            @include('backend.users.create')
                        @endif
                    </div>

                </div>
            </div>

            <div class="col-lg-8">

                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Овог</th>
                                    <th>Нэр</th>
                                    <th>Email</th>
                                    <th style="width: 80px"></th>
                                </tr>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->getKey() }}</td>
                                    <td>{{ $user->first_name }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['admin.users.destroy', $user->getKey()], 'method' => 'DELETE', 'class' => 'form-inline', 'id' => 'form-destroyer-' . $user->getKey()]) !!}

                                            <a href="{{ route('admin.users.edit', $user->getKey()) }}" class="btn btn-default btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <button type="submit" class="btn btn-danger btn-xs btn-destroyer" data-target="#form-destroyer-{{ $user->getKey() }}">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection