$(document).ready(function () {
    

    $('#tombol-cari').hide();
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function () {

        // munculkan loader
        $('.loader').show();

        // ajax mengunakan load simple
        // $('#container').load("ajax/mancity.php?keyword="+ $("#keyword").val());

        $.get("ajax/mancity.php?keyword="+ $("#keyword").val(),
            function (data) {
                $('#container').html(data);
                $('.loader').hide();
            },
        );
    });
});