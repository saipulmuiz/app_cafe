<footer class="footer-area gray-bg pt-100 pb-95">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-12">
                            <div class="footer-widget">
                                <div class="footer-widget-l-content">
                                    <h4>20 Years Experience</h4>
                                    <ul>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li> 
                                        <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li> 
                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 col-12">
                            <div class="footer-widget">
                                <div class="footer-widget-m-content text-center">
                                    <div class="footer-logo">
                                        <a href="#">
                                            <!-- <img src="assets/img/logo/logo.png" alt=""> -->
                                            <h1>Jeda Coffee</h1>
                                        </a>
                                    </div>
                                    <div class="footer-nav">
                                        <nav>
                                            <ul>
                                                <li><a href="index.php">home</a></li>
                                                <li><a href="#">about us</a></li>
                                                <li><a href="?module=toko">shop </a></li>
                                                <li><a href="#"> blog </a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <p>Copyright <i class="fa fa-copyright"></i> 2020 <a href="https://freethemescloud.com/" target="_blank" >Free Themes Cloud.</a> All rights reserved. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="footer-widget f-right">
                                <div class="footer-widget-r-content">
                                    <ul>
                                        <li><span>Phone :</span> 0853-5322-2649</li>
                                        <li><span>Open : </span> 12.00 PM</li>
                                        <li><span>Address :</span> Jl. Letjen Ibrahim Adjie No.7A, Indihiang, Kec. Indihiang, Tasikmalaya, Jawa Barat 46151</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- modal -->
            
            <div class="clickable-mainmenu text-center">
                <div class="clickable-mainmenu-icon">
                    <button class="clickable-mainmenu-close">
                        <span class="ion-android-close"></span>
                    </button>
                </div>
                <div id="menu" class="text-left">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="about-us.html">about us</a></li>
                        <li><a href="?module=toko">shop</a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php include "javascript.php" ?>
        <script type="text/javascript">
            $(document).ready(function(){       

            // Start Get Cart
            function cart(){
                const $cart = $("#daftar-belanja");
                var $listCart='';
                $.ajax({
                    url:'<?php echo base_url('front/cart');?>',
                    dataType:'json',
                    type:'GET',
                    success:function(data){
                        for(var row=0;row<data.length;row++){
                            $listCart+='<li class="single-product-cart"><div class="cart-img"><a href="#"><img src="<?php echo base_url('upload/menu/')?>'+data[row].foto+'" width="90" alt=""></a></div><div class="cart-title"><h3><a href="#">'+data[row].nama_menu+'</a></h3><span>'+data[row].qty+' x Rp '+data[row].harga+'</span></div><div class="cart-delete"><a href="#"class="hapus_cart" data-id="'+data[row].id_cart+'"><i class="ion-ios-trash-outline"></i></a></div></li><input type="hidden" name="sub_total" id="sub_total">';
                        }$cart.html($listCart+'<li class="single-product-cart"><div class="cart-checkout-btn"><a class="no-mrg btn-hover cart-btn-style" href="<?php echo site_url('checkout') ?>">Bayar Pesanan</a></div></li>');
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }
                        window.onload = timedRefresh(700);
                    }
                });
            }
            // End Get Cart


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
                            $('#status').html("<h3>Ini daftar belanjaan mu</h3>");
                            cart();
                            $('.sidebar-cart').addClass('inside');
                            $('.wrapper').addClass('overlay-active');
                        
                        }
                    });
                
            });
                function subTotal(){
                    let num1 = document.getElementById("qty_cart").value;
                    let num2 = document.getElementById("harga_cart").value;
                    let sum = Number(num1) * Number(num2);
                    $("#subtot").val(sum);
                }

                $('.qtybutton').on('click', function() {
                    subTotal();
                });

               $('a.hapus_cart').on('click',function(){
                var id_cart=$(this).attr('data-id');
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url('index.php/front/hapus_keranjang')?>",
                        dataType : "JSON",
                        data : {id_cart: id_cart},
                        success: function(data){
                            cart();
                        }
                    });
                });

               const $hapus = $('a.hapus_cart');

               $hapus.click(function(){
                var id_cart=$(this).attr('data-id');
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/front/hapus_keranjang')?>",
                    dataType : "JSON",
                    data : {id_cart: id_cart},
                    success: function(data){
                       cart();
                    }
                });
                
               })


    });
</script>
    </body>
</html>