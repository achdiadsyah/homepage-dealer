        
        <script src="<?= base_url(); ?>assets/js/json-to-table.js"></script>
        
        <script>
            $( document ).ready(function() {
                
                // Getting Detail Product By Slug
                $.ajax({
                type: "GET",
                async: true,
                url: '<?php echo base_url(); ?>api/getdetail/<?= $slug; ?>',
                dataType: 'JSON',
                success: function (data){
                    
                    const findLinkPDF = data.buttons.find(({ target }) => target === 'download');
                    
                    if (findLinkPDF.target === 'download'){
                        $("#download").attr("href", findLinkPDF.url);
                    } else {
                        $("#download").attr("class", "d-none");
                    }
                    
                    $("#product-title").append(data.title);
                    $("#product-title-full").append('Honda '+data.title);
                    
                    // Show Banner Utama
                    $("#banner-utama").empty();
                    var bUtama = '<img src="'+data.banner[0].url[0]+'" class="img-fluid w-100" alt="'+data.banner[0].title+'">';
                    $("#banner-utama").append(bUtama);
                    
                        
                    // Show Banner Lifestyle
                    var len1 = Object.keys(data.banner_lifestyle).length;
                    var bLifestyle = data.banner_lifestyle;
                    var itembannerlifestyle = '';
                    for (var i = 0; i < len1; i++) {
                        itembannerlifestyle += '<div class="carousel-item " id="crs-life"><img class="d-block w-100" src="' + bLifestyle[i].url.toString() + '" alt="'+ bLifestyle[i].title +'"></div>';
                    }
                    $("#banner-lifestyle").html(itembannerlifestyle);
                    $('#crs-life ').first().addClass('active');
                    $("#myCarousel-lifestyle").carousel();
                    
                    
                    // Show Banner Techonlogy
                    var len2 = Object.keys(data.banner_technology).length;
                    if (len2 === 0){
                        $("#banner-tech").remove();
                    } else {
                        var bTechno = data.banner_technology;
                        var itemBtechnology = '';
                        for (var i = 0; i < len2; i++) {
                            itemBtechnology += '<div class="carousel-item " id="crs-tech"><img class="d-block w-100" src="' + bTechno[i].url.toString() + '" alt="'+ bTechno[i].title +'"></div>';
                        }
                        $("#banner-technology").html(itemBtechnology);
                        $('#crs-tech').first().addClass('active');
                        $("#myCarousel-technology").carousel();
                        
                    }
                    
                    // Show Colors Varians
                    var len3 = Object.keys(data.colors).length;
                    var cVarians = data.colors;
                    var itemVarian = '';
                    for (var i = 0; i < len3; i++) {
                        itemVarian += '<div class="carousel-item " id="crs-varians"><img class="d-block w-100" src="' + cVarians[i].image + '" alt="'+ cVarians[i].title +'"></div>';
                    }
                    $("#colors-varians").html(itemVarian);
                    $('#crs-varians').first().addClass('active');
                    $("#myCarousel-colors").carousel();
                    
                    
                    // Show Spec Unit
                    var len4 = Object.keys(data.spesifications).length;
                    var cSpec = data.spesifications;
                    var headTabSpec = '';
                    var contentSpec = '';
                    
                    var dataTabSpec = '';
                    for (var i = 0; i < len4; i++) {
                        headTabSpec += 
                            '<li class="nav-item">'+
                                '<a class="nav-link" id="headtap-spec" href="#'+cSpec[i].slug+'" role="tab" data-toggle="tab">'+cSpec[i].title+'</a>'+
                            '</li>';
                        
                        let dataDetail = cSpec[i].details;
                        var jsonHtmlTable = ConvertJsonToTable(dataDetail, 'specTable', null, 'Download');
                        
                        contentSpec += 
                            '<div role="tabpanel" class="tab-pane fade-in" id="'+cSpec[i].slug+'">'+
                            '<div id="tab-render">'+jsonHtmlTable+'</div>'+
                            '</div>';
                    }
                    
                    $("#spec-title").html(headTabSpec);
                    $("#spec-body").html(contentSpec);
                    $('.tab-pane').first().addClass('active');
                    $('#headtap-spec').first().addClass('active');
                    
                    
                    // Show Banner Accesoris / Apparel
                    var len5 = Object.keys(data.banner_accessories).length;
                    if (len5 === 0){
                        $("#banner-acc").remove();
                        $("#banner-acc-btn").remove();
                        var replaceBacc = '<div class="d-flex justify-content-center"><h5>Maaf.. Aksesoris atau Apparel Tidak Tersedia untuk produk ini</h5></div>';
                        $("#myCarousel-acc").append(replaceBacc);
                    } else {
                        var bAcc = data.banner_accessories;
                        var itemBacc = '';
                        for (var i = 0; i < len5; i++) {
                            itemBacc += '<div class="carousel-item " id="crs-acc"><img class="d-block w-100" src="' + bAcc[i].url.toString() + '" alt="'+ bAcc[i].title +'"></div>';
                        }
                        $("#banner-acc").html(itemBacc);
                        $('#crs-acc').first().addClass('active');
                        $("#myCarousel-acc").carousel();
                        
                    }
                    
                    // Show 360
                    if (data.threesixties === null){
                        
                        $('#col-threesixties').addClass('d-none');
                    } else {
                        var len6 = Object.keys(data.threesixties).length;
                        var b360 = data.threesixties;
                        var item360 = '';
                        for (var i = 0; i < len6; i++) {
                            item360 += '<img class="d-block w-100" src="' + b360[i].image + '" alt="'+ b360[i].id +'">';
                        }
                        $("#threesixties").html(item360);
                    }
                    
                    
                },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });


                // Get Harga
                $.ajax({
                type: "GET",
                async: true,
                url: 'https://app.lambaronasakti.com/api/findHarga/<?= $slug; ?>',
                dataType: 'JSON',
                success: function (data){
                    
                    console.log(data);

                    var lenX = Object.keys(data.result).length;
                    var itemOTR = '<tr><td colspan="2"><p class="center">Data Not Found</p></td><tr>';
                    for (var i = 0; i < lenX; i++) {
                        itemOTR += '
                        <tr>'
                            +'<td>'+data.result[i].nama+'</td>'
                            +'<td>'+data.result[i].ofr+'</td>'
                        +'</tr>';
                    }
                    $("#price-otr").html(itemOTR);
                    
                },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
                
            });
            
        </script>