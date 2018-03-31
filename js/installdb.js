/*
* This jQuery code can call AJAX to test the database connection
*
* require: template/trydb.php
*
* */

$(document).ready(function() {

    $('input').on('input', function() {

        var dbhost = $('input#dbhost').val();
        var dbname = $('input#dbname').val();
        var dbuser = $('input#dbuser').val();
        var dbpass = $('input#dbpass').val();

        if((dbhost.length > 1) && (dbname.length > 1) && (dbuser.length > 1) && (dbpass.length > 1))
        {

            $.ajax({
                url: 'template/trydb.php',
                data: {
                    'dbhost': dbhost, 'dbname': dbname,
                    'dbuser': dbuser, 'dbpass': dbpass
                },
                type: 'post',
                success: function (result) {
                    console.log('Connection result: ' + result);

                    if (result == 1) {
                        $('input#button-next').prop('disabled', false);
                    } else {
                        $('input#button-next').prop('disabled', true);
                    }
                }
            });

        }
        else {
            $('input#button-next').prop('disabled', true);
        }


    });

});