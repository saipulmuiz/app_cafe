<?php include "_parts/header.php" ?>
<!-- sidebar-cart start -->
<div class="sidebar-cart onepage-sidebar-area">
        <div class="wrap-sidebar">
            <div class="sidebar-cart-all">
                <div class="sidebar-cart-icon">
                    <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
                </div>
                <div class="cart-content">
                    

                    <h3 id="status">
                        <?php if($status !="0")
                        {
                            echo "Ini daftar belanjaan mu";
                        }else{
                            echo "Yuk Belanja!";
                        }
                        ?>
                        
                    </h3>
                    <ul id="daftar-belanja">
                        <?php if($status !="0"){?>
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
                                    <a href="#" id="hapus_cart" data-id="<?php echo $dt->id_cart ?>" class="hapus_cart"><i class="ion-ios-trash-outline"></i></a>
                                </div>
                            </li>
                            <input type="hidden" name="sub_total" id="sub_total">
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
                                    <!-- <a class="btn-hover cart-btn-style" href="<?php echo site_url('cart') ?>">view cart</a> -->
                                    <a class="no-mrg btn-hover cart-btn-style" href="<?php echo site_url('checkout') ?>">Bayar Pesanan</a>
                                </div>
                            </li>
                        <?php }?>
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
    <div class="product-collection-area pt-100 pb-50">
        <div class="container">
            <div class="section-title text-center mb-55">
                <h2>Yuk Ngopi.in!</h2>
                <p>Sesungguhnya ngopi bagian melatih dari kepahitan dan keasaman hidup</p>
            </div>
            <div class="row">
                <?php foreach($menus as $menu): ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="single-product mb-35">
                        <div class="product-img">
                        <a href="#" data-toggle="modal" class="view_menu" data="<?php echo $menu->id_menu ?>"><img src="<?php echo base_url('upload/menu/') . $menu->foto ?>" title="<?php echo $menu->nama_menu ?>" alt="<?php echo $menu->nama_menu ?>" height="270"></a>
                            <span>Ready</span>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal" data="<?php echo $menu->id_menu ?>" class="animate-right view_menu" id="view_menu" href="#"><i class="ion-ios-eye-outline"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="product-title-price">
                                <div class="product-title">
                                    <h4><a href="#" data-toggle="modal" class="view_menu" data="<?php echo $menu->id_menu ?>"><?php echo $menu->nama_menu ?></a></h4>
                                </div>
                                <div class="product-price">
                                    <span><?php echo "Rp" . number_format("$menu->harga",0, '', '.') ?></span>
                                </div>
                            </div>
                            <div class="product-cart-categori">
                                <div class="product-cart">
                                    <span><?php echo $menu->kategori ?></span>
                                </div>
                                <div class="product-categori">
                                    <a href="#" data-toggle="modal" class="view_menu" data="<?php echo $menu->id_menu ?>"><i class="ion-bag"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img  id="gambar1" src="#" title="#" alt="#">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="<?php echo base_url('dist/assets/img/quick-view/l2.jpg') ?>" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="<?php echo base_url('dist/assets/img/quick-view/l3.jpg') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3 id="nama_menu"></h3>
                                    <div class="price">
                                        <span class="new" id="harga"></span>
                                    </div>
                                    
                                    <p id="deskripsi"></p>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
                                            <input type="text" value="1" oninput="subTotal()" onvolumechange="subTotal()" name="qty_cart" id="qty_cart" class="cart-plus-minus-box">
                                        </div>
                                        <input type="hidden" name="id_menu_cart" id="id_menu_cart">
                                        <input type="hidden" name="harga_cart" id="harga_cart">
                                        <input type="hidden" name="subtot" id="subtot">
                                        <div class="quickview-btn-cart">
                                            <a class="btn-hover-black" id="tambah_keranjang" href="#">Yuk, Beli!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Small modal</button>
    <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ion-android-close" aria-hidden="true"></span>
            </button>
        </div>
        <div class="modal-body">
            <span><h3>Hello, <?php echo $notrans["nama_pemesan"] ?> <b>No Transaksi Anda : </b><?php echo $notrans["id_transaksi"] ?> <p>Silahkan hubungi kasir untuk membayar dengan mencantumkan ID Transaksinya..</p></h3></span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <style>
        .quick-view-tab-content .tab-pane > img {
            max-width: 320px;
        }
    </style>
<?php include "_parts/footer.php" ?>
<?php if ($this->session->flashdata('success')): ?>
<script>
        $(window).on('load',function(){
            $('#modal-default').modal('show');
        });
</script>
<?php endif; ?>