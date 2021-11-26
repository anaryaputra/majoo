$(document).ready(function() {    
    const signupLink = $('#signup-link');
    const signupSection = $('#signup');    
    const signupButton = $('#signup-btn');
    const signupAlert = $('#signup-alert');
    const loginLink = $('#login-link');
    const loginSection = $('#login');
    const loginButton = $('#login-btn');
    const loginAlert = $('#login-alert');

    // EVENT LISTENERS
    // EVENT LISTENER FOR SIGN UP LINK
    signupLink.click(function() {
        showSignupForm();
    });

    // EVENT LISTENER FOR LOG IN LINK
    loginLink.click(function() {
        showLoginForm();
    })

    // EVENT LISTENER FOR SIGN UP FORM SUBMIT
    $("#form-signup").on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "https://anaryaindika.com/majoo/validate-registration",
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response.success) {
                    signupAlert.html(response.message).addClass("alert-success").removeClass("alert-danger").show();
                    setTimeout(function() {
                        location.assign('https://anaryaindika.com/majoo/dashboard/');
                    }, 1500);  
                } else {
                    signupAlert.html(response.message).addClass("alert-danger").removeClass("alert-success").show();
                }
            },
            error: function(xhr, thrownError) {
                signupAlert.html("Error: " + xhr.status + ". " + xhr.responseText).addClass("alert-danger").removeClass("alert-success").show();
                showError(xhr, thrownError);
            }
        });
    });

    // EVENT LISTENER FOR LOGIN FORM SUBMIT
    $("#form-login").on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "https://anaryaindika.com/majoo/validate-login",
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response.success) {
                    loginAlert.html(response.message).addClass("alert-success").removeClass("alert-danger").show();
                    setTimeout(function() {
                        location.assign('https://anaryaindika.com/majoo/dashboard/');
                    }, 1500); 
                } else {
                    loginAlert.html(response.message).addClass("alert-danger").removeClass("alert-success").show();                    
                }
            },
            error: function(xhr, thrownError) {
                loginAlert.html("Error: " + xhr.status + ". " + xhr.responseText).addClass("alert-danger").removeClass("alert-success").show();
                showError(xhr, thrownError);
            }
        });
    });
    
    // signupButton.click(function() {
    //     console.log($("#form-signup").serializeJSON());
    //     $.ajax({
    //         url: "https://anaryaindika.com/majoo/validate-registration/",
    //         type: "POST",
    //         data: $("#form-signup").serializeJSON(),            
    //         success: function(xhr, status) {                
    //             console.log(status);
    //             signupAlert.html("Akun berhasil dibuat! Mengarahkan ke dashboard.").addClass("alert-success").removeClass("alert-danger").show();
    //             setTimeout(function() {
    //                 window.location.replace = "https://anaryaindika.com/majoo/dashboard/";
    //             }, 1000);                
    //         },
    //         error: function(xhr, thrownError) {
    //             console.log("Error Code: " + xhr.status + " " + xhr.statusText + "\n" + xhr.responseText + "\n" + thrownError);
    //         }
    //     })
    // });

    function showSignupForm() {
        loginSection.hide();
        signupSection.show();
    }

    function showLoginForm() {
        signupSection.hide();
        loginSection.show();
    }

    function showError(xhr, thrownError) {        
        console.log("Error Code: " + xhr.status + " " + xhr.statusText + "\n" + xhr.responseText + "\n" + thrownError);
    }
});