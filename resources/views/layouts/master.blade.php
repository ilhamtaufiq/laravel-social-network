<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <!-- Bootstrap -->
        {{ Html::style('assets/css/bootstrap.min.css') }}
        {{ Html::style('assets/bootstrap/css/bootstrap.min.css') }}
        {{ Html::style('assets/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('assets/css/form-elements.css') }}
        {{ Html::style('assets/css/style.css') }}

    <!-- Favicon and touch icons -->
      <!-- {{ Html::image('assets/ico/favicon.png') }} -->
    </head>
    <body>
    	@include('includes.header')
    	<div class="container">
    		@yield('content')
    	</div>
    </body>
</html>
