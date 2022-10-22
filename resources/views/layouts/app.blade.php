<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>@yield('titulo') - Tutti</title>

	  <!-- CSRF Token -->
	  <meta name="csrf-token" content="{{ csrf_token() }}">

	  <!-- Bootstrap -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

	  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

	  <style>
	    .select2-selection__rendered {
	    		line-height: 38px !important;
	    }

	    .select2-container .select2-selection--single {
	    		height: 38px !important;
	    }

	    .select2-selection__arrow {
	    		height: 36px !important;
	    }

	    .inner{
	    	overflow: hidden;
	    }
	    .inner img{
	    	transition: all 1.5s ease;
	    }

	    .inner:hover img{
	    	transform: scale(1.5);
	    }
	  </style>
	  @yield('css')

	  <!-- Scripts y fontawesome-->
	  <script src="{{ asset('js/all.js') }}" defer></script>
	</head>

	<body>
		<div class="wrapper hover_collapse">
			@include('layouts.navbar')

		  @include('layouts.sidebar.index')

			<div class="main_container">
				<div class="container">
					@yield('contenido')
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		@yield('js')

		<script type="text/javascript">
            $(document).ready(function () {
                $('body').tooltip({selector: '[data-toggle="tooltip"]'});

				setTimeout(() => {
                    $('.toast').toast('show');
                }, 0)
            });
        </script>

	</body>
</html>
