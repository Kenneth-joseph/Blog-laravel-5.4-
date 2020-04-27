<!DOCTYPE html>
<html>
<head>
	<!--making the links available in the head by extending-->
	 @extends('layout.head')
	<title>Blog</title>
</head>
<body>
@include('include.navbar')	
@section('content')
@show
</body>
</html>