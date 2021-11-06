
    <script src="<?= base_url('assets/vendor/'); ?>jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript">
    
        function save()
        {
            
            if($('#form-booking-servis').valid()){
                $('#btnSave').attr('disabled',true);
                $('#btnSave').html('<i class="fas fa-sync fa-spin"></i> Sending...');
                
                var url = "https://app.hondalambarona.id/api/bookingservis";
                
                // ajax adding data to database
                $.ajax({
                    url : url,
                    type: "POST",
                    data: $('#form-booking-servis').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status = true)
                        {
                            mySwalalert('Berhasil Mengirim Data', 'success');
                            $('#btnSave').html('Submit');
                            $('#btnSave').attr('disabled',false);
                            $('#form-booking-servis')[0].reset();

                        } else if(data.status = false){

                            mySwalalert('Gagal Mengirim Data', 'danger');
                            $('#btnSave').html('Submit');
                            $('#btnSave').attr('disabled',false);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        mySwalalert('Gagal Mengirim Data', 'danger');
                        $('#btnSave').html('Submit');
                        $('#btnSave').attr('disabled',false);
                    }
                });
            }else{
                mySwalalert('Periksa Kembali Form Booking anda, ada yang belum lengkap', 'info');
            }
            return false;
        }
    </script>