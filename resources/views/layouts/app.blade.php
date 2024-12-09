<!doctype html>
<html>
<head>
   @include('components.head')
</head>
<body>
   <header>
       @include('components.header')
   </header>
   <main id="main" class="row">
           @yield('content')
   </main>
   <footer>
       @include('components.footer')
   </footer>
</body>
</html>
