<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="<?= site_url('/') ?>"><i class="fa fa-home"></i> Home</a>
                        <span>Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="discount-coupon col-8">
                    <h6>Cari Produk</h6>
                    <form action="#" class="coupon-form">
                        <input type="text" placeholder="Enter your codes">
                        <button type="submit" class="site-btn coupon-btn">Search</button>
                    </form>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-end">
                    <div class="cart-buttons">
                        <a href="<?= site_url('product/create') ?>" class="primary-btn up-cart">Tambah Produk</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                        <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Image</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $num = 1;
                                foreach ($products as $product) { 
                                    ?>
                                    <tr>
                                        <td class="<?= $num == 1 ? 'first-row' : '' ?>">
                                            <h5><?= $product->nama ?> </h5>
                                        </td>
                                        <td class="p-price <?= $num == 1 ? 'first-row' : '' ?>">Rp <?= number_format($product->harga, 2, ',', '.') ?></td>
                                        <td class="qua-col <?= $num == 1 ? 'first-row' : '' ?>"><?= $product->stok ?></td>
                                        <td class="cart-pic <?= $num == 1 ? 'first-row' : '' ?>"><img src="<?= base_url('public/uploads/'.$product->gambar.'') ?>" alt="" width="170" height="170"></td>
                                        <td class="total-price <?= $num == 1 ? 'first-row' : '' ?>"><?= $product->kategori ?></td>
                                        <td class="<?= $num == 1 ? 'first-row' : '' ?>"><i class=""></td>
                                    </tr>
                                    <?php 
                                    $num = $num+1;
                            } 
                            ?> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
<?= $this->endSection() ?>