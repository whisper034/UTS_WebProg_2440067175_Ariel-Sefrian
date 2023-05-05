<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
@include('main.header')

@if($active === 'profile')
    @include('miscellanous.containers.container-home')
    @include('miscellanous.other.coffee-button')
@elseif($active === 'transaction-history')
    @include('miscellanous.containers.container-transaction')
    @include('miscellanous.other.coffee-button')
@elseif($active === 'coffee')
    @include('miscellanous.containers.container-transaction')
@endif

@include('main.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/home.js"></script>
</html>
