<div class="header mb-3">
    <div class="header-top">
        <div class="container">
            <div class="header-top-in">
                <div class="logo">
                    <a href="index.html"><img alt=" " src="images/logo.png"></a>
                </div>
                <div class="header-in">
                    <ul class="icon1 sub-icon1">
                        <li><a href="wishlist.html">WISH LIST (0)</a></li>
                        <li><a href="account.html"> MY ACCOUNT</a></li>
                        <li><a href="#"> SHOPPING CART</a></li>
                        <li><a href="checkout.html">CHECKOUT</a></li>
                        <li>
                            <div class="cart">
                                <a class="cart-in" href="#"> </a>
                                <span> 0</span>
                            </div>
                            <ul class="sub-icon1 list">
                                <h3>Recently added items(2)</h3>
                                <div class="shopping_cart">
                                    <div class="cart_box">
                                        <div class="message">
                                            <div class="alert-close"></div>
                                            <div class="list_img"><img alt="" class="img-responsive"
                                                                       src="images/14.jpg"></div>
                                            <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span
                                                    class="actual">
		                             $12.00</span></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="cart_box1">
                                        <div class="message1">
                                            <div class="alert-close1"></div>
                                            <div class="list_img"><img alt="" class="img-responsive"
                                                                       src="images/15.jpg"></div>
                                            <div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>1 x<span
                                                    class="actual">
		                             $12.00</span></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total">
                                    <div class="total_left">CartSubtotal :</div>
                                    <div class="total_right">$250.00</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="login_buttons">
                                    <div class="check_button"><a href="checkout.html">Check out</a></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="h_menu4">
                <a class="toggleMenu" href="#">Menu</a>
                <ul class="nav">
                    <li class="@if(Request::route()->getName() === "welcome") active @endif"><a href="{{ route('welcome') }}"><i> </i>Главная</a></li>
                    <li class="@if(Request::route()->getName() === "tires.index") active @endif"><a href="{{ route('tires.index') }}">Шины</a>
                        <ul class="drop">
                            <li><a href="products.html">Sony(2)</a></li>
                            <li><a href="products.html">Android(4)</a></li>
                            <li><a href="products.html">Apple(7)</a></li>
                            <li><a href="products.html">Acer(53)</a></li>
                            <li><a href="products.html">HP(78)</a></li>
                            <li><a href="products.html">Intel(5)</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Контакты</a></li>

                </ul>
            </div>
        </div>
    </div>
    @if(Request::route()->getName() === "tires.index")
        <div class="header-bottom-in h-100">
    <div class="container">
        <div class="header-bottom-on">
            {{--                        <p class="wel"><a href="#">Welcome visitor you can login or create an account.</a></p>--}}
            <div class="row">
                <div class="col-md-2 col-4 pt-2">
                    <div class="">
                        <label for="">Марка</label>
                        <select class="form-control">
                            <option class="in-of" value="Dollars">Dollars</option>
                            <option class="in-of" value="Euro">Euro</option>
                            <option class="in-of" value="Yen">Yen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-4 pt-2">
                    <div class="">
                        <label for="">Ширина</label>
                        <select class="form-control">
                            <option class="in-of" value="Dollars">Dollars</option>
                            <option class="in-of" value="Euro">Euro</option>
                            <option class="in-of" value="Yen">Yen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-4 pt-2">
                    <div class="">
                        <label for="">Профиль</label>
                        <select class="form-control">
                            <option class="in-of" value="Dollars">Dollars</option>
                            <option class="in-of" value="Euro">Euro</option>
                            <option class="in-of" value="Yen">Yen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-4 pt-2">
                    <div class="">
                        <label for="">Диаметр</label>
                        <select class="form-control">
                            <option class="in-of" value="Dollars">Dollars</option>
                            <option class="in-of" value="Euro">Euro</option>
                            <option class="in-of" value="Yen">Yen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-4 pt-2">
                    <div class="">
                        <label for="">Сезон</label>
                        <select class="form-control">
                            <option class="in-of" value="Dollars">Dollars</option>
                            <option class="in-of" value="Euro">Euro</option>
                            <option class="in-of" value="Yen">Yen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-4 d-flex justify-content-center align-items-end pt-2">
                    <div class="text-center">
                        <a class="btn btn-primary" href="">Найти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
</div>


