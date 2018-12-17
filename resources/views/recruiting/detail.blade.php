@extends('layouts.default')
@section('style')
    //
@endsection

@section('content')
    @include('partitions.banner', ['pageTitle' => $recruiting->title, 'routeName' => $recruiting->title])
    //
@endsection

@section('script')
    //
@endsection
