<div class="top_navbar">
  <a href="/">
    <div class="logo">Byte&Asociados</div>
  </a>
  <div class="menu">
        <div class="hamburger">
          @auth
            <i class="fas fa-bars"></i>
          @endauth
        </div>

    <div class="profile_wrap">
      <div class="top-right links">
          @auth
          @if (auth()->user()->rol_id == 5)
              <a href="">
                <i class="fas fa-cart-plus"></i>
                <span id="items" class="badge badge-pill badge-danger font-weight-normal"
                    style="position:relative; top:-10px; left:-10px">{{ session()->get('items') }}</span> Mi carrito
              </a>
          @endif
              <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          @else
              <!--a href="">
                <i class="fas fa-sign-in-alt"></i> Iniciar sesión
              </a>
              <a href=" ">
                <i class="fas fa-user-plus"></i> Registrarse
              </a-->
          @endauth
      </div>
    </div>
  </div>
</div>
