
<script type="text/javascript">
  
    function save()
    {
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
                if(data.status = true) /
                {
                    mySwalalert('Berhasil Mengirim Data', 'success');
                    $('#btnSave').html('Submit');
                    $('#btnSave').attr('disabled',false);
                }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                mySwalalert('Gagal Menyimapan Data', 'danger');
                $('#btnSave').html('Submit');
                $('#btnSave').attr('disabled',false);
            }
        });
    }
</script>