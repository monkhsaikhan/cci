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
            <div class="col-lg-8">
                <div class="box">
                {!! Form::open(['class' => 'form-horizontal', 'route' => 'admin.post.store']) !!}
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Гарчиг</label>

                            <div class="col-sm-10">
                                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Гарчиг']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Төрөл</label>

                            <div class="col-sm-10">
                                {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Төрөл сонгох']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Нийтлэл</label>

                            <div class="col-sm-10">
                                {{ Form::textarea('content', null, ['class' => 'form-control', 'rows' => 20]) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Агуулгын төрөл</label>

                            <div class="col-sm-10">
                                {!! Form::select('post_type', ['post' => 'Post', 'c-block' => 'Content Block', 'c-text' => 'Custom Text'], null, ['class' => 'form-control', 'placeholder' => 'Төрөл сонгох']) !!}
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

@section('js')
    <script type="text/javascript" src="{{asset('vendor/tinymce/tiny_mce.js')}}"></script>

    <script>

        tinyMCE.init({
            // General options
            language: "mn",
            mode: "textareas",
            theme: "advanced",
            plugins: "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,openmanager",
            relative_urls: false,
            remove_script_host: false,
            entity_encoding: "raw",
            // Theme options
            theme_advanced_buttons1: "newdocument,fullscreen,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect,|,bullist,numlist,|,insertlayer,moveforward,movebackward,absolute",
            theme_advanced_buttons2: "outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor,|,cite,abbr,acronym,del,ins,attribs",
            theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl,|,visualchars,nonbreaking,template,blockquote,pagebreak",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "bottom",
            theme_advanced_resizing: true,
            file_browser_callback: "openmanager",
            open_manager_upload_path: '../../../../post/',
            // Skin options
            skin: "o2k7",
            skin_variant: "silver"
        });
    </script>

@endsection