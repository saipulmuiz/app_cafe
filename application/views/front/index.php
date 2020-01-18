<?php include "_parts/header.php" ?>
<!-- sidebar-cart start -->
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
    <div class="product-collection-area pt-100 pb-50">
        <div class="container">
            <div class="section-title text-center mb-55">
                <h2>Koleksi Terbaru</h2>
                <p>ini menampilkan semua produk yang terbaru</p>
            </div>
            <div class="row">
                <?php foreach($menus as $menu): ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="single-product mb-35">
                        <div class="product-img">
                        <a href="#" data-toggle="modal" class="view_menu" data="<?php echo $menu->id_menu ?>"><img src="<?php echo base_url('upload/menu/') . $menu->foto ?>" title="<?php echo $menu->nama_menu ?>" alt="<?php echo $menu->nama_menu ?>" height="270"></a>
                            <span>sale</span>
                            <div class="product-action">
                                <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
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
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                                        <img id="sm_gambar1" src="#" title="#" alt="#" height="112" width="100">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                                        <img src="<?php echo base_url('dist/assets/img/quick-view/s2.jpg') ?>" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                                        <img src="<?php echo base_url('dist/assets/img/quick-view/s3.jpg') ?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3 id="nama_menu"></h3>
                                    <div class="price">
                                        <span class="new" id="harga"></span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-ios-star red-star"></i>
                                            <i class="ion-android-star-outline"></i>
                                            <i class="ion-android-star-outline"></i>
                                            <i class="ion-android-star-outline"></i>
                                        </div>
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
                                            <a class="btn-hover-black" id="tambah_keranjang" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="ion-ios-heart-outline"></i></a>
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
    <style>
        .quick-view-tab-content .tab-pane > img {
            max-width: 320px;
        }
    </style>
<?php include "_parts/footer.php" ?>
<script type="text/javascript">
function rubah(angka){
   var reverse = angka.toString().split('').reverse().join(''),
   ribuan = reverse.match(/\d{1,3}/g);
   ribuan = ribuan.join('.').split('').reverse().join('');
   return ribuan;
 }
    $('.view_menu').on('click',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/front/view_menu')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(id_menu, nama_menu, harga){
                        $('#exampleModal').modal('show');
                        $('#id_menu_cart').val(data.id_menu);
                        $('#harga_cart').val(data.harga);
                        $('#nama_menu').html(data.nama_menu);
                        $('#harga').html("Rp"+rubah(data.harga));
                        $('#deskripsi').html(data.deskripsi);
                        $("#gambar1, #sm_gambar1").attr("src","<?php echo base_url('upload/menu/') ?>" + data.foto);
                        $("#gambar1, #sm_gambar1").attr("title",data.nama_menu);
                        subTotal();
                    });
                }
            });
            return false;
        });
        // Insert Cart
        $('#tambah_keranjang').on('click',function(){
                var id_menu=$('#id_menu_cart').val();
                var qty=$('#qty_cart').val();
                var harga=$('#harga_cart').val();
                var sub_total=$('#subtot').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/front/tambah_keranjang')?>",
                    dataType : "JSON",
                    data : {id_menu:id_menu , qty:qty, harga:harga, sub_total:sub_total},
                    success: function(data){
                        $('[name="id_menu_cart"]').val("");
                        $('[name="qty_cart"]').val("1");
                        $('[name="harga_cart"]').val("");
                        $('[name="subtot"]').val("");
                        $('#exampleModal').modal('hide');
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }
                        window.onload = timedRefresh(100);
                    }
                });
                return false;
            });
            function subTotal(){
                let num1 = document.getElementById("qty_cart").value;
                let num2 = document.getElementById("harga_cart").value;
                let sum = Number(num1) * Number(num2);
                document.getElementById("subtot").value = sum;
            }
            $('.qtybutton').on('click', function() {
                subTotal();
        
            });
        //Hapus Keranjang
        $('.hapus_cart').on('click',function(){
            var id_cart=$(this).attr('data-id');
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/front/hapus_keranjang')?>",
                    dataType : "JSON",
                    data : {id_cart: id_cart},
                    success: function(data){
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }
                        window.onload = timedRefresh(100);
                    }
                });
                return false;
        });
</script>