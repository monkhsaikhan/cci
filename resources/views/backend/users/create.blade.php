{!! Form::open(['class' => 'form-horizontal', 'route' => 'admin.users.store']) !!}
<div class="box-body">
    <div class="form-group">
        <label class="col-sm-2 control-label">Овог</label>

        <div class="col-sm-10">
            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Овог']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Нэр</label>

        <div class="col-sm-10">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Нэр']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>

        <div class="col-sm-10">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Нууц үг</label>

        <div class="col-sm-10">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Нууц үг']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Нууц үг батлах</label>

        <div class="col-sm-10">
            {!! Form::password('confirm-password', ['class' => 'form-control', 'placeholder' => 'Нууц үг батлах']) !!}
        </div>
    </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
    <button type="reset" class="btn btn-default">Арилгах</button>
    <button type="submit" class="btn btn-info pull-right">Бүртгэх</button>
</div>
<!-- /.box-footer -->
{!! Form::close() !!}