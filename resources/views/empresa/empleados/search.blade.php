<form class="form-inline my-2 my-lg-0" method="GET" action="{{route('empleados')}}" role="search">
        <div class="form-group">
                <div class="input-group text-center">
                    <input type="text" class="form-control mr-sm-2" name="searchText"placeholder="Buscar..."value="{{$searchText}}">
                    <span class="input-group-append"></span>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                
                </div>
        </div>
    </form>
</form>


