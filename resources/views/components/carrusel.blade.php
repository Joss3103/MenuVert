<section class="carrusel">
    <div class="carrusel__contenedor">
        <button aria-label="Anterior" class="carrusel__anterior">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <div class="carrusel__lista">
            <div class="carrusel__elemento">
                <img  class="carrusel__img" src="{{asset('img/slidebar/pexels-pixabay-mesero.jpg')}}" alt="comida en restaurante">
                <sub class="carrusel__sub">ENJOY YOUR HEALTHY DELICIOUS MEAL</sub>
                <h2 class="carrusel__h2">Treat Yourself</h2>
                <p class="carrusel__p">Another free template by Colorlib. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <button class="carrusel__button">Explore Now</button>
                <div class="carrusel__icons"> <x-iconsSocial /></div>
               
            </div>
            <div class="carrusel__elemento">
                <img  class="carrusel__img" src="{{asset('img/slidebar/pexels-christel-jensen-628776.jpg')}}" alt="comida en restaurante">
                <sub class="carrusel__sub">ENJOY YOUR HEALTHY DELICIOUS MEAL</sub>
                <h2 class="carrusel__h2">Treat Yourself</h2>
                <p class="carrusel__p">Another free template by Colorlib. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <button class="carrusel__button">Explore Now</button>
               {{--  <x-iconsSocial /> --}}
                <div class="carrusel__icons"> <x-iconsSocial /></div>
            </div>
            <div class="carrusel__elemento">
                <img  class="carrusel__img" src="{{asset('img/slidebar/pexels-valeria-boltneva-1860208.jpg')}}" alt="comida en restaurante">
                <sub class="carrusel__sub">ENJOY YOUR HEALTHY DELICIOUS MEAL</sub>
                <h2 class="carrusel__h2">Treat Yourself</h2>
                <p class="carrusel__p">Another free template by Colorlib. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <button class="carrusel__button">Explore Now</button>
                <div class="carrusel__icons"> <x-iconsSocial /></div>
            </div>
        </div>
        <button aria-label="Siguiente" class="carrusel__siguiente">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>
    <div class="carrusel__filtro"></div>
    <div role="tablist" class="carrusel__indicadores"></div>
    
</section>