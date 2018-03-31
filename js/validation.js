/*
* This jQuery code can call AJAX to test the database connection
*
* require: template/trydb.php
*
* */

$(document).ready(function() {

    $('input').on('input', function() {

    });

    function username(string) {
        var regex = /^[a-zA-Z0-9.\-_$@*!]{3,30}$/;

        if(regex.test(string) && (string.length >= 6)) {
            return string;
        }

        return null;
    }

    function password(pass1, pass2) {
        if((pass1 === pass2) && (pass1.length >= 6)) {
            return pass1;
        }

        return null;
    }

});