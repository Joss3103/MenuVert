<nav class="navbar">
        <div class="navbar__logo" onclick="location.href='/'">
        <p class="navbar__p">Menu Vert <span class="navbar__span">-Fit Food-</span></p>
        </div>   
    <ul class="listanav">
        <li class="listanav__item">
            <a href="/" class="listanav__a">Home</a>
        </li>
        <li class="listanav__item">
            <div class="dropdown dropdown--hover" >
            <button class="dropdown__button" onclick="location.href='/menu'">Menú
            <!-- <i class="fa-sharp fa-solid fa-chevron-down dropdown__button dropdown__button--chevron"></i> -->
            </button>
            <!-- <div class="dropdown__content">
                <ul class="dropdown__lista">
                    <li class="dropdown__item"> <a class="dropdown__link" href="#">Desayuno</a></li>
                    <li class="dropdown__item"><a class="dropdown__link" href="#">Almuerzo</a></li>
                    <li class="dropdown__item"><a class="dropdown__link" href="#">Comida</a></li>
                    <li class="dropdown__item"><a class="dropdown__link" href="#">Bebidas</a></li>
                </ul>
            </div> -->
        </li>
        <li class="listanav__item"> <a class="listanav__a" href="/galeria">Galería</a> </li>
        <li class="listanav__item"> <a  class="listanav__a"href="/nosotros">Nosotros</a> </li>
    </ul>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                       href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-pill badge-light">
                            <!-- <i class="fa fa-shopping-cart"></i>  -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" 
                            width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="6" cy="19" r="2" />
                                <circle cx="17" cy="19" r="2" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>{{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('components.cart-drop')
                        </ul>

                    </div>
                </li>
        <button class="navbar__button" onclick="location.href='/iniciar-sesion'">  
             <i  class="navbar__button navbar__button--login fa-solid fa-user"></i>
            </button>
        <button class="navbar__button navbar__button--reservacion" >Reservación</button>
</nav>
