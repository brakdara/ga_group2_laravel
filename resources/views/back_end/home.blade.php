@extends('back_end.template')

@section('navbar')
@include('back_end.layout.navbar')
@endsection

@section('sidebar')
@include('back_end.layout.sidebar')
@endsection

@section('content')
@include('back_end.layout.dashboard')  
@endsection

