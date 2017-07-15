<!DOCTYPE html>
<html lang="en">
<head>
@include('partials/_head')
</head>
<body>

@include('partials/_nav')
@yield("content")
{{--  @include('partials/_footer')  --}}
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
@include('partials/_javascript')
@include("partials._footer")
</body>
</html>