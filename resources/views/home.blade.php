@extends('layouts.front')

@section('content')

@foreach($page->items as $item)

@include('block.'.$views[$item->type], ['item' => $item])

@endforeach

@endsection