@php
	$title = "Parametre de l'application";
@endphp
@extends('layouts.app')

@push('page-css')
	<!-- Select2 css-->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush


@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title">Paramètre Général</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
		<li class="breadcrumb-item"><a href="javascript:(0)">Paramètres</a></li>
		<li class="breadcrumb-item active">Paramètre Général</li>
	</ul>
</div>
@endpush

@section('content')

<div class="row">
	<div class="col-12">
		@include('app_settings::_settings')
	</div>
</div>
@endsection

@push('page-js')
	<!-- Select2 js-->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

