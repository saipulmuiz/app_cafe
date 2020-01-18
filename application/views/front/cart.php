<?php include "_parts/header.php" ?>
            <div class="sidebar-cart onepage-sidebar-area">
                <div class="wrap-sidebar">
                    <div class="sidebar-cart-all">
                        <div class="sidebar-cart-icon">
                            <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                        </div>
                        <div class="cart-content">
                            <h3>Shopping Cart</h3>
                            <ul>
                                <?php foreach($data as $dt): ?>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="<?php echo base_url('upload/menu/') . $dt->foto ?>" width="90" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h3><a href="#"> <?php echo $dt->nama_menu ?></a></h3>
                                        <span><?php echo $dt->qty ?> x <?php echo "Rp" . number_format("$dt->harga",0, '', '.') ?></span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ion-ios-trash-outline"></i></a>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                <?php foreach($subtot as $sub): ?>
                                <li class="single-product-cart">
                                    <div class="cart-total">
                                        <h4>Total : <span><?php echo "Rp" . number_format("$sub->total",0, '', '.') ?></span></h4>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                                <li class="single-product-cart">
                                    <div class="cart-checkout-btn">
                                        <a class="btn-hover cart-btn-style" href="<?php echo site_url('cart') ?>">view cart</a>
                                        <a class="no-mrg btn-hover cart-btn-style" href="<?php echo site_url('checkout') ?>">checkout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-search start -->
            <div class="main-search-active">
                <div class="sidebar-search-icon">
                    <button class="search-close"><span class="ion-android-close"></span></button>
                </div>
                <div class="sidebar-search-input">
                    <form>
                        <div class="form-search">
                            <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                            <button>
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- main-search start -->
            <div class="cur-lang-acc-active">
                <div class="wrap-sidebar">
                    <div class="sidebar-nav-icon">
                        <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                    </div>
                    <div class="cur-lang-acc-all">
                        <div class="single-currency-language-account">
                            <div class="cur-lang-acc-title">
                                <h4>My Account:</h4>
                            </div>
                            <div class="cur-lang-acc-dropdown">
                                <ul>
                                    <li><a href="#">Compare Products </a></li>
                                    <li><a href="#">Default welcome msg!</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="wishlist.html">My Wish List</a></li>
                                    <li><a href="login.html">Sign In </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(<?php echo base_url('dist/assets/img/bg/breadcrumb.jpg') ?>)">
                <div class="container">
                    <div class="breadcrumb-content">
                        <h2>cart page</h2>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li> cart </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- shopping-cart-area start -->
            <div class="cart-main-area pt-95 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="cart-heading">Cart</h1>
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">remove</th>
                                                <th class="product-price">images</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data as $dt): ?>
                                            <tr>
                                                <td class="product-remove"><a href="#"><i class="ion-android-close"></i></a></td>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url('upload/menu/') . $dt->foto ?>" alt="" width="90"></a>
                                                </td>
                                                <td class="product-name"><a href="#"><?php echo $dt->nama_menu ?> </a></td>
                                                <td class="product-price"><span class="amount"><?php echo "Rp" . number_format("$dt->harga",0, '', '.') ?></span></td>
                                                <td class="product-quantity">
                                                    <input value="1" type="number">
                                                </td>
                                                <td class="product-subtotal"><?php echo "Rp" . number_format("$dt->sub_total",0, '', '.') ?></td>
                                                
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal<span>100.00</span></li>
                                                <li>Total<span>100.00</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "_parts/footer.php" ?>
