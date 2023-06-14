<!DOCTYPE html>
<html lang="en">
<head>
    <title>@section('title') :: Laravel проект @show</title>
    <meta name="description" content=""/>
    @include('styles')
</head>
<body>
<div class="container">
    @include('nav')
    @yield('content')
</div>
</body>
</html>
