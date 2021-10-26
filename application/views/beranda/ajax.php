        
        <script>
            $( document ).ready(function() {
                
                setTimeout(function() {
                    $.ajax({
                    type: "GET",
                    async: true,
                    url: '<?php echo base_url(); ?>api/getslider',
                    dataType: 'JSON',
                    success: function (data){
                        var len = Object.keys(data.banner).length;
                        var banner = data.banner;
                        
                        var itemcaro = '';
                        
                        for (var i = 0; i < len; i++) {
                            itemcaro += '<div class="carousel-item "><img class="d-block w-100" src="' + banner[i].url.toString() + '" alt="'+ banner[i].title +'"></div>';
                        }
                        $("#homepageItems").html(itemcaro);
                        $('.carousel-item ').first().addClass('active');
                        $("#myCarousel").carousel();
                    },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                    $("#matic").click();
                }, 2000);
                
                
                // Getting Category ID
                $.ajax({
                type: "GET",
                async: true,
                url: '<?php echo base_url(); ?>api/getcategory',
                dataType: 'JSON',
                success: function (data){
                    
                    $('#matic').attr('onclick','getProduct("'+data[0].id+'")');
                    $('#sport').attr('onclick','getProduct("'+data[1].id+'")');
                    $('#cub').attr('onclick','getProduct("'+data[2].id+'")');
                    
                },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
                
            });
            
            function getProduct(id){
                // Kosongakan Row
                $("#productShow").empty();
                
                var limit = 4 ;
                $.ajax({
                type: "GET",
                async: true,
                url: '<?php echo base_url(); ?>api/getproduct/' + id + '/' + limit,
                dataType: 'JSON',
                success: function (data){
                    var len = Object.keys(data).length;
                    var product = '';
                    var badgeNew = '';
                    
                    for (var i = 0; i < len; i++) {
                        var varian = Object.keys(data[i].colors).length;
                        
                        if (data[i].new === true){
                            var badgeNew = '<span class="notify-badge"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAA7EAAAOxAGVKw4bAAADSUlEQVRYhcXX34uWRRQH8I8vi21Riy0SIhEksURIhDOFlVqCSGawdtFFEBW2ZHYjEUtIf4CVRIQQtXoRVnShbSYaXhRUbMsSz0BsEiFLXQWLBG0Rm4gsXcy82+O77/7K3e3AwzvPnPOe73fOzDlznlUWIVUIj6IfH+N4TOlSme/E03gSr8eUzi3U56pFgN+BhK4yNY63y/gA1pXxBO6NKY0tGYGywm+xaYF8R3F/TGnyPxGoQngYW3ATbsRGbFsgeFOG8T0m8QeGYkpfzUugCqGB3/0b6qWSv3BzTOlKfbLRxnDDMoCTI7mhdbIdgbuWAXxW3+0I3L2MBGb4nj4DVQi34BCe1Z7YUsgU3serMaXxaQJVCHvxJtYsE3CrTKA/pnRsVRVCB/5GxwqBN+UKrm+UtBheYXAYiSldae71iZpiDA/hYG3uHTyIS9hfxs3nFZws4w9r/3kCvbX3Y9iK7+qYTQKD8gGByZjSN3gNX5S5X2NKw3LYRuU93FWegJ6i/6TYX8DJmNJpnK8BjqCnYA3WCXTXCDTlhrLaSVzXouuWS/UWObU2ViGsl7dyCqdrtmcK8RE8IB/0qeJDo5Teo2Yewhfxs5yanXVFTGkoprQ9prS96BvYEVO6WP7zKbZVIdyKsxiNKf1ZIqZgHa1CaHSgD5vNlIC9eAMv1BVVCI/hg/K6uvzuwvGy+hG8hR/kvP+82OysubkPzzfkBqOdXC6r68JAi65DDuUaeatgR4nm4fK+B7tLlh2pQliHe1r89DcKSOv+k/dtLQ43O5+anMfLtee3YrupVLjNuK2Q6ixbs9PVFXYKh5qVsA/vFYMxPCNHZk8xfE4+2V/iJTkT6nIC6/EuPsI+PFV0B+S+4CAeqYHvjykN1O+CPvkwroTsiykNcHVIhlYI/CqsOoG1K0hgGqtOoPv/JtAuE5ZLprHqBM7gcbmYjC8D6MXiuxenmpOzteUNOWXOLhH4bpyLKc2I8pwfJlUIX1v890CrDMWUts6mnK/3O3KN4PP6mK8NO4Uf5Tv8J1T4Ra6Grf3jhHwB3Y6IO+XqOTgXwLzfhlUIq9Go3wdVCD34rIAo5HpjShdqNp2YiildviYCcxDrklfcwIFy3y9a/gGjJ/SXcy3/0AAAAABJRU5ErkJggg==" /></span>';
                        } else {
                            var badgeNew = '';
                        }
                    
                        product +=
                        '<div class="col-md-3 mt-2">'+
                            '<div class="card">'+
                                '<div class="card-body p-n3">'+
                                    badgeNew+
                                    '<img src="'+ data[i].thumbnail +'" class="product-card-img img-fluid" alt="'+ data[i].slug +'">'+
                                '</div>'+
                                '<div class="card-body text-center">'+
                                    '<div class="mb-2">'+
                                        '<h5 class="font-weight-semibold mt-n2"> <a href="<?= base_url(); ?>product/detail/'+ data[i].slug +'" class="text-default mb-2">'+ data[i].title +'</a> </h6> <p class="text-muted mt-n2" data-abc="true">Tersedia '+varian+' Varian & Warna</p>'+
                                    '</div>'+
                                    '<a href="<?= base_url(); ?>product/detail/'+ data[i].slug +'" class="btn btn-danger btn-sm">Selengkapnya <i class="icofont-long-arrow-right"></i></a>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                    }
                        
                    $("#productShow").append(product);
                    
                },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            }
            
        </script>