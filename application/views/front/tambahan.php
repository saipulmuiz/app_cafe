<script type="text/javascript">
    $(document).ready(function(){
        cart();
        

        // Start Get Cart
        function cart(){
            const $cart = $("#daftar-belanja");
            var $listCart='';
            $cart.html('loading');
            $.ajax({
                url:'<?php echo base_url('front/cart');?>',
                dataType:'json',
                type:'GET',
                success:function(data){
                    for(var row=0;row<data.length;row++){
                        $listCart+='<li class="single-product-cart"><div class="cart-img"><a href="#"><img src="<?php echo base_url('upload/menu/')?>'+data[row].foto+'" width="90" alt=""></a></div><div class="cart-title"><h3><a href="#">'+data[row].nama_menu+' </a></h3><span>'+data[row].qty+' x Rp '+data[row].harga+'</span></div><div class="cart-delete"><button type="button" class="hapus_cart button btn-primary" data-id="'+data[row].id_cart+'">Hapus</button></div></li><input type="hidden" name="sub_total" id="sub_total">';
                    }
                    $cart.append($listCart+'<li class="single-product-cart"><div class="cart-checkout-btn"><a class="no-mrg btn-hover cart-btn-style" href="<?php echo site_url('checkout') ?>">Bayar Pesanan</a></div></li>');
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
           $("button").click(function(){
            var id= $(this).data("id");
            alert(id);
           });


    });
</script>