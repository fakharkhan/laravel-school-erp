
<!DOCTYPE html>
<html lang="en">
<head>
    @include('shared.assets_head')
    @yield('assets-page-head')
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ Config::get('project.name') }}</a>
        </div>
        <div class="navbar-collapse collapse">
            @include('shared.admin.navbar')
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="alertContainer">
        @include('shared.alert')
    </div>

    @yield('content')
</div>

@include('shared.assets_body')
@yield('assets-page-body')
</body>
</html>
