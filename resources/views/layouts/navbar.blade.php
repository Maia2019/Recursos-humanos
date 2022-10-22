<div class="top_navbar">
  <a href=" ">
    <div class="logo">Tutti</div>
  </a>
  <div class="menu">
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>

    <div class="profile_wrap">
      <div class="top-right links">)
              <a href=" ">
                <i class="fas fa-cart-plus"></i>
                <span id="items" class="badge badge-pill badge-danger font-weight-normal"
                    style="position:relative; top:-10px; left:-10px"></span> Mi carrito
              </a>
              <a href=" " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar sesión
              </a>

              <form id="logout-form" action=" " method="POST" style="display: none;">
                  @csrf
              </form>
              <a href=" ">
                <i class="fas fa-sign-in-alt"></i> Iniciar sesión
              </a>
              <a href=" ">
                <i class="fas fa-user-plus"></i> Registrarse
              </a>
      </div>
    </div>
  </div>
</div>
