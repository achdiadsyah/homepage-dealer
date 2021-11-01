        
        <main id="main">
    
            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
              <div class="container">
        
                <ol>
                  <li><a href="<?= base_url(); ?>">Beranda</a></li>
                  <li>Layanan</li>
                  <li>Booking Servis</li>
                </ol>
                <h2><?= $title; ?></h2>
        
              </div>
            </section><!-- End Breadcrumbs -->
            
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 mx-auto my-n5">
                            <div class="section-title">
                                <span>Form Booking</span>
                                <h2>Form Booking</h2>
                            </div>
                            <form action="#" id="form-booking-servis" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anda" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="nowa">Nomor Whatsapp</label>
                                    <input type="text" class="form-control" id="nowa" name="nowa" placeholder="Ex : 08123456789" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="merek">Merek Motor</label>
                                    <input type="text" class="form-control" id="merek" name="merek" placeholder="Ex : Vario 125 / Scoopy / CBR" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="km">Angka Kilometer Terakhir</label>
                                    <input type="text" class="form-control" id="km" name="km" placeholder="Ex : 12000" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Booking</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="jam">Waktu Booking</label>
                                    <input type="time" class="form-control" id="jam" name="jam" min="09:00" max="15:00" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="keluhan">Sampaikan Keluhan</label>
                                    <textarea class="form-control" id="keluhan" name="keluhan" rows="4"></textarea>
                                </div>
                            </form>
                            <button class="btn btn-danger" id="btnSave" onClick="save()">Submit</button>
                        </div>
                    </div>
                </div>
            </section>
        
            
    
        </main><!-- End #main -->