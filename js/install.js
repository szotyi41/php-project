$(document).ready(function() {

    $('#keeplogin').click(function () {
       var checkbox = $(this).closest(':checkbox');
       $(checkbox).prop('checked', true);
    });

    $('#button-next').click(function () {
       $.ajax({
           url: 'database.php',
           type: 'post',
           success: function (result) {
               console.log('You can connect: ' + result);
           }
       });
    });
});