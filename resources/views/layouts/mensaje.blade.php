@if ( $errors->any() )
    <div class="alert alert-danger alert-dismissible m-0 fade show" role="alert">
        {{ $errors->first() }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session('message'))
    <div class="alert alert-success alert-dismissible m-0 fade show" role="alert">
        {{ session('message') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session('status'))
    <div class="alert alert-success alert-dismissible m-0 fade show" role="alert">
        {{ session('status') }}

        <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif