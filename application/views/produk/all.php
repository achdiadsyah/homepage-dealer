        
        <main id="main">
    
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
              <div class="container">
        
                <ol>
                  <li><a href="<?= base_url(); ?>">Beranda</a></li>
                  <li>Produk</li>
                </ol>
                <h2><?= $title; ?></h2>
        
              </div>
            </section><!-- End Breadcrumbs -->
        
            <section class="portfolio">
                <div class="container">
    
                    <div class="section-title">
                        <span>Pilih Motor Anda</span>
                        <h2>Pilih Motor Anda</h2>
                    </div>
    
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12 pb-2 d-flex justify-content-center">
                            <button class="btn btn-danger mx-1 matic" id="matic" onclick="">Matic</button>
                            <button class="btn btn-danger mx-1" id="sport" onclick="">Sport</button>
                            <button class="btn btn-danger mx-1" id="cub" onclick="">Cub</button>
                            <a class="btn btn-danger mx-1" href="https://www.astra-honda.com/hondabigbike/" target="_blank">Big Bike</a>
                        </div>
                    </div>
                    <div class='row d-flex justify-content-center mt-50 mb-50' data-aos="zoom-in" data-aos-delay="170" id="productShow">
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </section>
    
        </main><!-- End #main -->