@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p>This is test my max this th sample content</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended to the sidebar</p>
@endsection