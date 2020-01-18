<?php
    include "koneksi.php";

    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        $tampil = mysqli_query($koneksi, "SELECT * FROM t_barang WHERE id_barang = $id");
        while($data = mysqli_fetch_array($tampil)){ ?>
            <div class="qwick-view-left">
                <div class="quick-view-learg-img">
                    <div class="quick-view-tab-content tab-content">
                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                            <img src="./admin/upload/produk/<?php echo $data['foto'] ?>" title="<?php echo $data['nama_barang'] ?>" alt="<?php echo $data['nama_barang'] ?>">
                        </div>
                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                            <img src="assets/img/quick-view/l2.jpg" alt="">
                        </div>
                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                            <img src="assets/img/quick-view/l3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="quick-view-list nav" role="tablist">
                    <a class="active" href="#modal1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                        <img src="./admin/upload/produk/<?php echo $data['foto'] ?>" title="<?php echo $data['nama_barang'] ?>" alt="<?php echo $data['nama_barang'] ?>" height="112" width="100">
                    </a>
                    <a href="#modal2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                        <img src="assets/img/quick-view/s2.jpg" alt="">
                    </a>
                    <a href="#modal3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                        <img src="assets/img/quick-view/s3.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="qwick-view-right">
                <div class="qwick-view-content">
                    <h3><?php echo $data['nama_barang'] ?></h3>
                    <div class="price">
                        <span class="new"><?php echo "Rp" . number_format("$data[harga_jual]",0, '', '.') ?></span>
                    </div>
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="ion-ios-star red-star"></i>
                            <i class="ion-ios-star red-star"></i>
                            <i class="ion-android-star-outline"></i>
                            <i class="ion-android-star-outline"></i>
                            <i class="ion-android-star-outline"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                    <div class="quick-view-select">
                        <div class="select-option-part">
                            <label>Size*</label>
                            <select class="select">
                                <option value="">- Please Select -</option>
                                <option value="">900</option>
                                <option value="">700</option>
                            </select>
                        </div>
                        <div class="select-option-part">
                            <label>Color*</label>
                            <select class="select">
                                <option value="">- Please Select -</option>
                                <option value="">orange</option>
                                <option value="">pink</option>
                                <option value="">yellow</option>
                            </select>
                        </div>
                    </div>
                    <div class="quickview-plus-minus">
                        <div class="cart-plus-minus">
                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                        </div>
                        <div class="quickview-btn-cart">
                            <a class="btn-hover-black" href="#">add to cart</a>
                        </div>
                        <div class="quickview-btn-wishlist">
                            <a class="btn-hover" href="#"><i class="ion-ios-heart-outline"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
        }
    }
?>