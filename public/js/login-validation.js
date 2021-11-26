$().ready(function() {
    $.validator.setDefaults({
        ignore: []
    });
    
    // FORM VALIDATIONS
    // FORM LOGIN
    $("#form-login").validate({
        rules: {
            inputLoginEmail: {
                required: true,
                email: true
            },
            inputLoginPassword: {
                required: true,
            }
        },        
        messages: {
            inputLoginEmail: {
                required: "Email tidak dapat kosong.",
                email: "Email tidak valid."
            },
            inputLoginPassword: {
                required: "Password tidak dapat kosong.",
            }
        },
        errorClass: "border-danger",
        validClass: "border-success",
        errorElement: "em",        
        highlight: function(element, errorClass, validClass) {            
            $(element).addClass(errorClass).removeClass(validClass);
            $(element.form).find("em[id=" + element.id + "-error]").addClass("text-danger");
        },        
    });

    // FORM SIGNUP
    $("#form-signup").validate({
        debug: true,
        rules: {
            inputSignupEmail: {
                required: true,
                email: true
            },
            inputSignupPassword: {
                required: true,
                minlength: 8
            },
            inputSignupPasswordConfirmation: {
                required: true,
                equalTo: "#inputSignupPassword"
            }
        },
        messages: {
            inputSignupEmail: {
                required: "Email tidak dapat kosong.",
                email: "Email tidak valid."
            },
            inputSignupPassword: {
                required: "Password tidak dapat kosong.",
                minlength: "Password harus terdiri atas minimal 8 karakter."
            },
            inputSignupPasswordConfirmation: {
                required: "Konfirmasi password dengan memasukkan kembali password.",
                equalTo: "Password tidak sama."
            }
        },
        errorClass: "border-danger",
        validClass: "border-success",
        errorElement: "em",        
        highlight: function(element, errorClass, validClass) {            
            $(element).addClass(errorClass).removeClass(validClass);
            $(element.form).find("em[id=" + element.id + "-error]").addClass("text-danger");
        }        
    });
});