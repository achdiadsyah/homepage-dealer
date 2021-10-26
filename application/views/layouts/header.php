        
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center">
                <h4 class="logo mr-auto">
                    <img src="<?= base_url(); ?>assets/img/icon/logo-white.png" alt="Logo">
                    <a href="<?= base_url(); ?>">PT. <span>Lambarona Sakti</span></a></h4>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="<?= base_url(); ?>">Beranda</a></li>
                        <li><a href="<?= base_url('product'); ?>">Produk</a></li>
                        <li class="drop-down"><a href="#">Blog</a>
                            <ul>
                                <li><a href="<?= base_url('blog/tipsandtrik'); ?>">Tips dan Trik</a></li>
                                <li><a href="<?= base_url('blog/artikel'); ?>">Artikel</a></li>
                                <li><a href="<?= base_url('blog/motogp'); ?>">MotoGP</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">Layanan</a>
                            <ul>
                                <li><a href="<?= base_url('layanan/ahass'); ?>">AHASS</a></li>
                                <li><a href="<?= base_url('layanan/marketing'); ?>">Marketing</a></li>
                                <li><a href="<?= base_url('layanan/bookingservis'); ?>">Booking Servis</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Promo</a></li>
                        <li><a href="#">Tentang</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    
        