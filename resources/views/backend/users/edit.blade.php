{!! Form::open(['class' => 'form-horizontal', 'route' => ['admin.users.update', $user->getKey()], 'method' => 'PATCH']) !!}
<div class="box-body">
    <div class="form-group">
        <label class="col-sm-2 control-label">Овог</label>

        <div class="col-sm-10">
            {!! Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' => 'Овог']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Нэр</label>

        <div class="col-sm-10">
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Нэр']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        </div>
    </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
    <button type="reset" class="btn btn-default">Арилгах</button>
    <button type="submit" class="btn btn-info pull-right">Хадгалах</button>
</div>
<!-- /.box-footer -->
{!! Form::close() !!}