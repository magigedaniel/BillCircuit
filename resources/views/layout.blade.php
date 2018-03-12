
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>BillCircuit - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>