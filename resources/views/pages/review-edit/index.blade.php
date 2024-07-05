@extends('layouts.layout')
@section('title', "Reviews")
@section('main')
@include('pages.review-edit.review-edit')
<script src="{{asset('js/text-truncate.js')}}"></script>
<script src="{{asset('js/time-lapse.js')}}"></script>
@if($reviewMethod == 'edit')
    <script src="{{asset('js/star-hover.js')}}"></script>
@endif
@if($errors->any())
    <script src="{{asset('js/review-modal-handling.js')}}"></script>
@endif
@stop