@extends('layouts/guest')
@section('content')
    <h1 style="font-size: 80px">404</h1>
    <p><strong>There isn't a {{ Request::url() }} Page here.</strong></p>

    <p><em>Are you trying to publish one?</em>
        It may take up to ten minutes until your page is available.
    </p>

    Click here to go <a href="/">Back</a>
@stop