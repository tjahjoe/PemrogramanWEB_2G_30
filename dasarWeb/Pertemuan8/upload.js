$(document).ready(function () {
    $('#upload-form').submit(function(e){
        e.perventDefault()
        var formData = new FormData(this)

        $.ajax({
            type: 'POST',
            url : 'upload_ajax.php',
            data : formData,
            chace : false,
            contentType : false,
            processData : false,
            success : function(response){
                $('#status').html(response)
            },
            error : function () {
                $('#status').html('Terjadi kesalahan saat mengunggah file.')
            }
            
        })
    })
})