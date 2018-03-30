$(document).ready(function () {

    $('input').on('input',function() {

        var dbhost = $('input#dbhost').val();
        var dbname = $('input#dbname').val();
        var dbuser = $('input#dbuser').val();
        var dbpass = $('input#dbpass').val();

        $.ajax({
            url: 'template/trydb.php',
            data: {
                'dbhost': dbhost, 'dbname': dbname,
                'dbuser': dbuser, 'dbpass': dbpass
            },
            type: 'post',
            success: function (result) {
                console.log('Connection result: ' + result);

                if(result == 1) {
                    $('input#button-next').prop('disabled', false);
                } else {
                    $('input#button-next').prop('disabled', true);
                }
            }
        });
    });

});