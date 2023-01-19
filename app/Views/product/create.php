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
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add New Product</h5>
                    <div class="contact-form">
                        <div class="leave-comment"> 
                            <form action="<?= site_url('product/store') ?>" enctype="multipart/form-data" class="comment-form" method="POST">
                                <h6 class="mb-3" >Product Name</h6>
                                <input type="text" name="nama" class="" id="nama">
                                <h6 class="mb-3" >Price</h6>
                                <input type="number" name="harga" class="" id="harga">
                                <h6 class="mb-3" >Stock</h6>
                                <input type="number" name="stok" class="" id="stok">
                                <h6 class="mb-3" >Gambar</h6>
                                <input type="file" name="gambar" class="form-control-file border-0 pl-0 mb-0" id="gambar">
                                <h6 class="mb-3" >Category</h6>
                                <select name="id_kategori" class="sorting mb-3">
                                <?php foreach($categories as $category): ?>
                                    <option value="<?= $category->id ?>"><?= $category->nama ?></option>
                                <?php endforeach ?>
                                </select>
                                <input type="submit" class="site-btn" value="Save Product">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
<?= $this->endSection() ?>