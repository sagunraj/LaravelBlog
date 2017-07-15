@extends('layouts.main')
@section('title', ' Homepage')


@section('content')
 @include("partials._service",[
 "homes"=>$homes])  



@include("partials._contact");



@endsection