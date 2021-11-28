        
        <main id="main">
    
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <ol>
                      <li><a href="<?= base_url(); ?>">Beranda</a></li>
                      <li><a href="<?= base_url('product'); ?>">Produk</a></li>
                      <li>Detail</li>
                      <li id="product-title"></li>
                    </ol>
                    <h2 id="product-title-full"></h2>
                </div>
            </section><!-- End Breadcrumbs -->
        
            <section class="inner-page">
                <div class="container">
                    
                    <!--Button Area-->
                    <div class="row d-flex justify-content-center justify-content-md-start mt-n5 pb-2">
                        <div class="btn-group" role="group">
                            <a class="btn btn-danger btn-sm" role="button" id="download" target="_blank">Lihat Brosur</a>
                            <a href="#varian" class="btn btn-danger btn-sm" role="button">List Harga</a>
                            
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Lainnya
                                </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a href="#" class="dropdown-item" role="button">Aksesoris</a>
                                <a href="#" class="dropdown-item" role="button">Simulasi Kredit</a>
                                <a href="#" class="dropdown-item" role="button">Test Ride</a>
                                <a href="#" class="dropdown-item" role="button">Hubungi Kami</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Banner Utama-->
                    <div class="row justify-content-center">
                        <div id="banner-utama" class="mb-4">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Banner Lifestyle-->
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div id="myCarousel-lifestyle" class="carousel slide mb-4">
                                <div class="carousel-inner" id="banner-lifestyle">
                                    <div class="d-flex justify-content-center">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel-lifestyle" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel-lifestyle" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <section id="varian" class="">
                        <!--Warna OTR 360 Area-->
                        <div class="row justify-content-center">
                            
                            <div class="col-md-4">
                                <div class="section-title">
                                    <span>Harga OTR</span>
                                    <h2>Harga OTR</h2>
                                </div>
                                <table width="100%" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td>Varian</td>
                                            <td>Harga OTR</td>
                                        </tr>
                                    </thead>
                                    <tbody id="price-otr">
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="section-title">
                                    <span>Pilihan Warna</span>
                                    <h2>Pilihan Warna</h2>
                                </div>
                                <div id="myCarousel-colors" class="carousel slide mb-4">
                                    <div class="carousel-inner" id="colors-varians">
                                        <div class="d-flex justify-content-center">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#myCarousel-colors" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel-colors" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-4 " id="col-threesixties">
                                <div class="section-title">
                                    <img src="<?= base_url(); ?>assets/img/icon/icon_360.png" class="img-fluid" width="20%"/>
                                </div>
                                <div id="threesixties">
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!--Banner Technology-->
                    <div class="row justify-content-center" id="banner-tech">
                        <div class="col-md-12">
                            <div id="myCarousel-technology" class="carousel slide mb-4 d-none d-lg-block d-md-block d-xl-block">
                                <div class="carousel-inner" id="banner-technology">
                                    <div class="d-flex justify-content-center">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel-technology" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel-technology" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Spec Area-->
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="section-title">
                                <span>Spesifikasi</span>
                                <h2>Spesifikasi</h2>
                            </div>
                            <ul class="nav nav-tabs" role="tablist" id="spec-title">
                                
                            </ul>
                                
                            <!-- Tab panes -->
                            <div class="tab-content" id="spec-body">
                                <div role="tabpanel" class="tab-pane fade-in active" id="tab-mesin">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Apparel Area-->
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="section-title">
                                <span>Aksesoris & Apparel</span>
                                <h2>Aksesoris & Apparel</h2>
                            </div>
                            <span class="small">*Aksesoris & Apparel Di Jual Terpisah</span>
                            <div id="myCarousel-acc" class="carousel slide mb-4">
                                <div class="carousel-inner" id="banner-acc">
                                    <div class="d-flex justify-content-center">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="banner-acc-btn">
                                    <a class="carousel-control-prev" href="#myCarousel-acc" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel-acc" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
    
        </main><!-- End #main -->