<title>Roshansoorma - @yield('title','website')</title>
{{-- <link rel="stylesheet" href="{{ asset('css/masterlayout.css')}}">
 <link rel="stylesheet"href="{{ asset(''css/masterlayout.css'')}}"> 
 <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
 <link rel="stylesheet" href="{{ asset('css/masterlayout.css') }}">

<h1>Header</h1>
<div class="dropdown" data-bs-theme="light">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
      Default dropdown
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
    </ul>
</div>

<br>
{{-- <article>
    @yield('content',<h2>'No Value Found'</h2>)   {{--yield parameter as a tise print 
</article> --}}

<article>
    @hasSection('content')
        @yield('content')
    @else
      <h2>No Value found</h2>
    @endif
</article>
<br>

<aside>
   @section('sidebar')
   <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="pos">Post</a></li>
   </ul>
   @show
</aside>

@stack('style')

    <h1>Footer</h1>
  <div class="dropdown" data-bs-theme="dark">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" aria-expanded="false">
      Dark dropdown
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
    </ul>
  </div>
  @stack('script')


  {{-- <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Roshansoorma - @yield('title')</title>
  </head>
  <body>
</body>
</html> --}}