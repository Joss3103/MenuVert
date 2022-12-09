<div class="check-container">
    <div class="check-container__p2">
        <p>Gracias por comprar en <p class="navbar__p">Menu Vert <span class="navbar__span">-Fit Food-</span></p></p>
        <p>Presentar este ticket en el area de entrega para pagar su comida</p>
    </div>

    @foreach(\Cart::getContent() as $item)
    <div class="check-container__row">
        <div class="col-lg-3">
            <img src="/img/galeria/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
        </div>
        <div class="col-lg-5">
            <p>
                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                <b>Price: </b>${{ $item->price }}<br>
                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                {{-- <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
            </p>
        </div>
    </div>
    @endforeach
    <div class="check-container__total">
        <p class=""><b>Total: </b>${{ \Cart::getTotal() }}</p>
    </div>
</div>