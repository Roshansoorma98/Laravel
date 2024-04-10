<h1>Welcome everyone, This is my first page</h1>
{{-- 
@php
    $name=['roshan'=>'soorma'];
    $value="";
@endphp
{{-- @include("pages.header",['$name'=>'$value']) 

@include("pages.footer")
{{-- <a href="/Roshan"> Post </a> --}}    

{{-- <a href="/rose"> Rose </a> --}}

{{-- <a href="{{route('rose')}}">Rose</a> --}}

{{-- @includeIf("pages.roshan") --}}

{{-- @includeWhen(true, 'pages.header', ['roshan' => 'soorma'])
@includeWhen(false, 'pages.header', ['roshan' => 'soorma']) --}}
{{-- @includeWhen(empty($value), 'pages.header', ['roshan' => 'soorma']) 

@includeUnless(empty($value), 'pages.header', ['roshan' => 'soorma']) --}}