    
        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Welcome to Lambarona</h1>
            <h2>Dealer Resmi Sepeda Motor Honda</h2>
            </div>
        </section>
    
        <main id="main"> 
            <section class="about p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 pt-4 order-1 order-lg-2" data-aos="fade-left">
                            <div id="myCarousel" class="carousel slide">
                                <div class="carousel-inner" id="homepageItems">
                                    <div class="d-flex justify-content-center">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 pt-4 order-2 order-lg-1 content" data-aos="fade-right">
                            <h5><i class="fas fa-praying-hands"></i> Salam SatuHati</h3>                    
                            <p class="text-justify">
                            Hay.. Salam SatuHati, selamat datang di situs kami. sebagai perkenalan, Dealer Honda PT. Lambarona Sakti merupakan salah satu dari ribuan Dealer Sepeda Motor Honda Resmi yang berada di seluruh Indonesia dan kami berada di Jl. Banda Aceh - Medan KM. 8,5 Kecamatan Ingin Jaya Kabupaten Aceh Besar. Sebagai satu satunya Dealer Honda yang berada di kawasan Aceh Besar, Lambarona Sakti memberikan solusi layanan 3 in 1 yaitu H123
                            </p>
                            <div class="container p-0 d-flex">
                                <img style="width:20%" src="<?= base_url(); ?>assets/img/icon/h1.jpg" alt="h1" class="img-fluid"> 
                                <img style="width:20%" src="<?= base_url(); ?>assets/img/icon/h2.jpg" alt="h2" class="img-fluid"> 
                                <img style="width:20%" src="<?= base_url(); ?>assets/img/icon/h3.jpg" alt="h3" class="img-fluid"> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="services p-3">
                <div class="container">
    
                    <div class="section-title">
                        <span>Layanan Kami</span>
                        <h2>Layanan Kami</h2>
                    </div>
    
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up">
                            <div class="icon-box">
                                <div class="icon"><i class="icofont-love"></i></div>
                                <h4>Honda Care</h4>
                                <p>Layanan yang siap membantu anda dalam menangani sepeda motor anda yang bermasalah</p>
                                
                                <div class="alert alert-primary mt-2" role="alert">
                                    <i class="icofont-wall-clock"></i> 09:00 s/d 21:00
                                </div>
                                <div class="alert alert-danger  mt-n2" role="alert">
                                    <i class="icofont-map-pins"></i> 7 KM dari Dealer terdekat
                                </div>
    
                                <a href="tel:+628126000055" class="btn btn-sm btn-dark mt-5">Hubungi Kami</a>
                            </div>                        
                        </div>
    
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="150">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4>Booking Servis</h4>
                                <p>Layanan Booking servis bebas antrian dan bebas atur waktu untuk jadwal servis motor anda</p>
                                
                                <div class="alert alert-primary mt-2" role="alert">
                                    <i class="icofont-wall-clock"></i> 08:30 s/d 15:00
                                </div>
                                <div class="alert alert-danger  mt-n2" role="alert">
                                    <i class="icofont-calendar"></i> Senin - Sabtu
                                </div>
    
                                <a href="<?= base_url('layanan/bookingservis'); ?>" class="btn btn-sm btn-dark mt-5">Daftar Sekarang</a>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4>Pit Express</h4>
                                <p>Layanan servis dan perawatan sepeda motor anda, untuk waktu singkat jika anda terburu buru</p>
                                
                                <div class="alert alert-primary mt-2" role="alert">
                                    <i class="icofont-wall-clock"></i> 08:30 s/d 15:00
                                </div>
                                <div class="alert alert-danger  mt-n2" role="alert">
                                    <i class="icofont-calendar"></i> Senin - Sabtu
                                </div>
    
                                <a href="<?= base_url('layanan/bookingservis'); ?>" class="btn btn-sm btn-dark mt-5">Daftar Sekarang</a>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                            <div class="icon-box">
                                <div class="icon"><i class="icofont-check"></i></div>
                                    <h4><a href="#">Servis Kunjung</a></h4>
                                    <p>Tidak sempat melakukan servis ke dealer? Jangan khawatir, manfaatkan jasa servis kunjung kami</p>
                                
                                <div class="alert alert-primary mt-2" role="alert">
                                    <i class="icofont-wall-clock"></i> 08:30 s/d 14:00
                                </div>
                                <div class="alert alert-danger  mt-n2" role="alert">
                                    <i class="icofont-calendar"></i> Senin - Sabtu
                                </div>
                                
                                <a href="<?= base_url('layanan/serviskunjung'); ?>" class="btn btn-sm btn-dark mt-5">Daftar Sekarang</a>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-calculator"></i></div>
                                <h4><a href="">Simulasi Kredit</a></h4>
                                <p>Manfaatkan fitur kalkulator kredit kami, agar anda mendapatkan bayangan nominam sebuah angsuran sepeda motor yang anda inginkan</p>
                                <a href="<?= base_url(); ?>simulasi" class="btn btn-sm btn-dark mt-5">Simulasi</a>
                            </div>
                        </div>
    
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                            <div class="icon-box">
                            <div class="icon"><i class="bx bx-book"></i></div>
                            <h4><a href="">Informasi Berkas</a></h4>
                            <p>Anda dapat dengan mudah melakukan pengecekan kesiapa berkas (STNK), Plat Nomor, dan Buku BPKB anda di dealer kami</p>
                            <a href="<?= base_url(); ?>cekberkas" class="btn btn-sm btn-dark mt-5">Cek Sekarang</a>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </section>
    
            <section class="cta">
                <div class="container" data-aos="zoom-in">
    
                    <div class="text-center">
                    <h3>Download Aplikasi Lambarona</h3>
                    
                    <p>Dapatkan berbagai macam kemudahan akses informasi sepeda motor anda, dengan aplikasi kami Lambarona Sakti</p>
                    <a href="#">
                        <img src="<?= base_url(); ?>assets/img/icon/play-google-badge.png" class="img-fluid" width="140px"/>
                        <img src="<?= base_url(); ?>assets/img/icon/appstore-badge.png" class="img-fluid" width="130px"/>
                    </a>
                    </div>
    
                </div>
            </section>
    
            <section class="portfolio">
                <div class="container mb-n5">
                    <div class="section-title">
                        <span>Pilih Motor Anda</span>
                        <h2>Pilih Motor Anda</h2>
                    </div>
    
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12 pb-2 d-flex justify-content-center">
                            <button class="btn btn-danger btn-sm mx-1 matic" id="matic" onclick="">Matic</button>
                            <button class="btn btn-danger btn-sm mx-1" id="sport" onclick="">Sport</button>
                            <button class="btn btn-danger btn-sm mx-1" id="cub" onclick="">Cub</button>
                            <a class="btn btn-danger btn-sm mx-1" href="https://www.astra-honda.com/hondabigbike/" target="_blank">Big Bike</a>
                        </div>
                    </div>
                    
                    <div class="row" data-aos="fade-down" data-aos-delay="150">
                        <div class="col-12 d-flex">
                            <a href="<?= base_url('product'); ?>">Lihat Semua Produk <i class="icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class='row d-flex justify-content-center mt-50 mb-50' data-aos="zoom-in" data-aos-delay="170" id="productShow">
                        
                    </div>
                </div>
            </section>
            
            <section class="team">
                <div class="container mb-n5">
                    <div class="section-title">
                        <span>Team & Sales</span>
                        <h2>Team & Sales</h2>
                    </div>
    
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                            <div class="member">
                            <img src="assets/img/team/default-team.jpg" alt="">
                            <h4>Ryan Agsa</h4>
                            <span>SWAT / Supervisor</span>
                                <div class="social">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                    <a href="#"><i class="icofont-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                            <div class="member">
                            <img src="assets/img/team/default-team.jpg" alt="">
                            <h4>Ilham Tasbih</h4>
                            <span>S2 Sales Counter / CS</span>
                                <div class="social">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                    <a href="#"><i class="icofont-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                            <div class="member">
                            <img src="assets/img/team/default-team.jpg" alt="">
                            <h4>Fety Salafiah</h4>
                            <span>S1 Sales Counter / CS</span>
                                <div class="social">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                    <a href="#"><i class="icofont-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 pb-2 d-flex justify-content-center">
                            <a class="btn btn-danger btn-sm mx-1" href="<?= base_url('team'); ?>" target="_blank">Lihat Semua</a>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            <section class="contact">
                <div class="container">
                    <div class="section-title">
                        <span>Hubungi Kami</span>
                        <h2>Hubungi Kami</h2>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-6">
                            <div class="info-box mb-4">
                            <a href="https://g.page/Lambarona?share" target="_blank"><i class="bx bx-map"></i></a>
                            <h3>Alamat Dealer</h3>
                            <p>Jl. Banda Aceh - Medan KM 8,5 Lambaro. Aceh Besar</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                            <a href="mailto:lambarona@yahoo.co.id" target="_blank"><i class="bx bx-envelope"></i></a>
                            <h3>Email</h3>
                            <p>lambarona@yahoo.co.id</p>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="info-box  mb-4">
                            <a href="tel:6282372720100" target="_blank"><i class="bx bx-phone-call"></i></a>
                            <h3>Telp / Whatsapp</h3>
                            <p>+62 823 7272 0100</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="row" data-aos="fade-up">
    
                        <div class="col-lg-6 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d811.1137861487148!2d95.35681524546857!3d5.509461060601787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040384dd5317e67%3A0xa050c9605ab3f841!2sPT%20Lambarona%20Sakti!5e0!3m2!1sid!2sid!4v1631232635495!5m2!1sid!2sid" width="100%" height="384" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
    
                    <div class="col-lg-6">
                        <form action="<?= base_url(); ?>kritiksaran" method="post" role="form" class="form">       
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">                 
                            <h3 class="card-title">Kritik dan Saran</h3>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="7" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="icofont-telegram"></i> Kirim Pesan</button>
                        </form>
                    </div>
    
                    </div>
    
                </div>
            </section>
    
            <section class="clients">
                <div class="container" data-aos="zoom-in">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="<?= base_url(); ?>assets/img/clients/client-1.png" class="img-fluid">
                        </div>
    
                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="<?= base_url(); ?>assets/img/clients/client-2.png" class="img-fluid">
                        </div>
    
                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="<?= base_url(); ?>assets/img/clients/client-3.png" class="img-fluid">
                        </div>
    
                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="<?= base_url(); ?>assets/img/clients/client-4.png" class="img-fluid">
                        </div>
    
                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="<?= base_url(); ?>assets/img/clients/client-5.png" class="img-fluid">
                        </div>
    
                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="<?= base_url(); ?>assets/img/clients/client-6.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
        </main>