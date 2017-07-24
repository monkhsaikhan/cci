@extends('layouts.front')

@section('content')

    <div id="topDiv" style="height: 100px"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="title">
                            <h4>{!! $post->title !!}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
        <style>

            #header {
                background: #606060 !important;
            }

        </style>
@endsection