<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Empresa</title>

	  <!-- CSRF Token -->
	  <meta name="csrf-token" content="UCItt5AsTyYtV6pNyTgzwFxg2nCwuYqCtO4y9xDw">

	  <!-- Bootstrap -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

	  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

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
	      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

	  <!-- Scripts y fontawesome-->
	  <script src="http://tutti.test/js/all.js" defer></script>
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


		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/scripts.js') }}"></script>
		<script src="{{ asset('js/select2.min.js') }}"></script>

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
