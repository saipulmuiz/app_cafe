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
            
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php endif; ?>
            <!-- checkout-area start -->
            <div class="checkout-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                        <form action="<?php echo base_url('checkout/tambah_pesanan')?>" method="post">
                                <div class="checkbox-form">						
                                    <h3>Informasi Pembayaran</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Atas Nama <span class="required">*</span></label>										
                                                <input type="text" name="nama_pemesan" placeholder="Pemesanan atas nama..." required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>										
                                                <input type="email" name="email" placeholder="Email Pemesan.." required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>No. HP  <span class="required">*</span></label>										
                                                <input type="text" name="no_hp" placeholder="Masukan No. Hp.." required />
                                            </div>
                                        </div>
                                    </div>													
                                </div>
                        </div>	
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Pesanan Anda</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Nama Menu</th>
                                                <th>Harga</th>
                                                <th class="product-total">Sub Total</th>
                                            </tr>							
                                        </thead>
                                        <tbody>
                                            <?php foreach($data as $dt): ?>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    <?php echo $dt->nama_menu ?> <strong class="product-quantity"> × <?php echo $dt->qty ?></strong>
                                                </td>
                                                <td><span class="amount"><?php echo "Rp" . number_format("$dt->harga",0, '', '.') ?></span></td>
                                                <td class="product-total">
                                                    <span class="amount"><?php echo "Rp" . number_format("$dt->sub_total",0, '', '.') ?></span>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <tfoot>
                                        <?php foreach($subtot as $sub): ?>
                                            <tr class="order-total">
                                                <th>Total Harga</th>
                                                <td colspan="2"><strong><span class="amount"><?php echo "Rp" . number_format("$sub->total",0, '', '.') ?></span></strong>
                                                <input type="hidden" name="total" value="<?php echo $sub->total ?>">
                                                </td>
                                            </tr>	
                                        <?php endforeach; ?>							
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="order-button-payment">
                                                <input type="submit" value="Buatkan Pesanan">
                                            </form>
                                        </div>								
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout-area end -->	
<?php include "_parts/footer.php" ?>