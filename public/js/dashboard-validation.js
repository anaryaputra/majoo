$().ready(function() {
    $.validator.setDefaults({
        ignore: []
    });

    // FORM VALIDATIONS
    // FORM ADD PRODUCT
    $("#form-add-product").validate({
        rules: {
            inputProductName: {
                required: true,                
            },
            inputProductCategory: {
                required: true
            },
            inputProductDescription: {
                required: true
            },
            inputProductPrice: {
                required: true          
            },
            inputProductPhoto: {
                required: true
            }
        },
        messages: {
            inputProductName: {
                required: "Nama produk tidak dapat kosong."
            },
            inputProductCategory: {
                required: "Pilih salah satu kategori produk."
            },
            inputProductDescription: {
                required: "Deskripsi produk tidak dapat kosong."
            },
            inputProductPrice: {
                required: "Harga produk tidak dapat kosong."        
            },
            inputProductPhoto: {
                required: "Foto produk tidak dapat kosong."
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
    // FORM ADD CATEGORY
    $("#form-add-category").validate({
        rules: {
            inputCategoryName: {
                required: true,                
            }            
        },
        messages: {
            inputProductName: {
                required: "Nama kategori tidak dapat kosong."
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
    // FORM UPDATE CATEGORY
    $("#form-update-category").validate({                
        rules: {
            inputUpdateCategoryName: {
                required: true 
            }            
        },
        messages: {
            inputUpdateProductName: {
                required: "Nama kategori tidak dapat kosong."
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