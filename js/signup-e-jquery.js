
// Jquery code here
$(document).ready(function(){
    $("#form-e").submit(function(event){
        event.preventDefault();
        var firstname = $("#sign-firstname").val();
        var lastname = $("#sign-lastname").val();
        var email = $("#sign-email").val();
        var day = $("#sign-day").val();
        var month = $("#sign-month").val();
        var year = $("#sign-year").val();
        var gender = $("#sign-gender").val();
        var password = $("#sign-password").val();
        var Cpassword = $("#sign-Cpassword").val();
        var submit = $("#sign-submit").val();

        $(".form-message").load("jquery_php/sign-e.php", {
            firstname: firstname,
            lastname: lastname,
            email: email,
            day: day,
            month: month,
            year: year,
            gender: gender,
            password: password,
            Cpassword: Cpassword,
            submit: submit

        });

    });
});
