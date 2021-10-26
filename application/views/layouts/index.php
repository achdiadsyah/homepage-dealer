
<!DOCTYPE html>
<html lang="en">
    
    <!-- ======= Head ======= -->
    <?php $this->load->view('layouts/head', $datas); ?>

    <body>
        
        <!-- ======= Topbar ======= -->
        <?php $this->load->view('layouts/topbar', $datas); ?>
        
        
        <!-- ======= Header & Navbar ======= -->
        <?php $this->load->view('layouts/header', $datas); ?>
        
        
        <!-- ======= The Content ======= -->
        <?php $this->load->view($content, $datas); ?>
        
        
        <!-- ======= Footer ======= -->
        <?php $this->load->view('layouts/footer', $datas); ?>
        
        
        <!-- ======= Back To Top Button ======= -->
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        
        
        <!-- ======= Pre Loader ======= -->
        <div id="preloader"></div>
        
        
        <!-- ======= JS ======= -->
        <?php $this->load->view('layouts/js', $datas); ?>
        
        
        
        <?php if (isset($datas['costum_js'])) {
            if (!empty($datas['costum_js'])) {
                echo "<!-- ======= Costum JS ======= -->";
                $this->load->view($datas['costum_js'], $datas);
            }
        } ?>

    </body>
</html>