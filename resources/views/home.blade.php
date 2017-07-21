@extends('layouts.front')

@section('content')
    @if($page->is_current == 1)
        @include('layouts.includes.calculator')
    @endif
    <?php
        $top = false;
        $bg = false;
        $status = false;
    ?>

    @if($page->items[0]->type == 'b-s-show')
        <?php
        $top = true;
        ?>
    @endif

    @if($page->items[0]->type == 'background')
        <?php
        $bg = true;
        ?>
    @endif

    @if(!$top)
        <div id="topDiv" @if(!$bg) style="height: 100px" @endif></div>
    @endif

    @foreach($page->items as $item)

        @if(!$status && $item->type == 'status')
            <?php $status = true; ?>
        @endif

        @include('block.'.$views[$item->type], ['item' => $item])

    @endforeach

    @if(!$status)

        <div id="idBgWrap"></div>
        <div id="idSectionBg"></div>

    @endif

@endsection

@section('css')
    @if(!$top && !$bg)
        <style>

            #header {
                background: #606060 !important;
            }

        </style>
    @endif
@endsection