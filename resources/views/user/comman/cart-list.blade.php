<div class="cartmini__widget">
    <div class="cartmini__inner">
        <ul>
            @foreach($getWishLists as $key => $getWishList)
            <li>
                <div class="cartmini__thumb">
                    <a href="javascript:void(0)">
                    <img src="{{ asset('storage/course-images/'.$getWishList->getCourse->image )}}" alt="">
                    </a>
                </div>
                <div class="cartmini__content">
                    <h5><a href="javascript:void(0)">{{ $getWishList->getCourse->title }} </a></h5>
                    <div class="product__sm-price-wrapper">
                        <span class="product__sm-price">${{ $getWishList->getCourse->actual_price }}</span>
                    </div>
                </div>
                <a href="javascript:void(0)" class="cartmini__del" onClick="removeFromCart({{ $getWishList->id }})"><i class="fal fa-times"></i></a>
            </li>
            @endforeach
            {{-- <li>
                <div class="cartmini__thumb">
                    <a href="javascript:void(0)">
                        <img src="{{ asset('assets/img/course/sm/cart-2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="cartmini__content">
                    <h5><a href="javascript:void(0)">Fundamentals of music theory Learn new</a></h5>
                    <div class="product-quantity mt-10 mb-10">
                        <span class="cart-minus">-</span>
                        <input class="cart-input" type="text" value="1" />
                        <span class="cart-plus">+</span>
                    </div>
                    <div class="product__sm-price-wrapper">
                        <span class="product__sm-price">$32.00</span>
                    </div>
                </div>
                <a href="javascript:void(0)" class="cartmini__del"><i class="fal fa-times"></i></a>
            </li> --}}
        </ul>
    </div>
    <div class="cartmini__checkout">
    @php
        $totalAmount = 0;
        foreach($getWishLists as $getWishList){
            $course = $getWishList->getCourse;
            $price = $course->actual_price;
            
            if (!is_numeric($price)) {
                continue;
            }

            $totalAmount += $price;
        }
    @endphp
        <div class="cartmini__checkout-title mb-30">
            <h4>Subtotal:</h4>
            <span>${{ $totalAmount }}</span>
        </div>
        <div class="cartmini__checkout-btn">
            <a href="{{ route('cart') }}" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
            <a href="checkout.html" class="e-btn w-100"> <span></span> checkout</a>
        </div>
    </div>
</div>
