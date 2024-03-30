<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

@include('layouts.header')

<body>

    @include('layouts.nav')

    @include('layouts.hero')

    @yield('content')

    @include('layouts.footer')

</body>

</html>
