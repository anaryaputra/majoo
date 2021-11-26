$(document).ready(function() {
    const addProductAlert = $("#add-product-alert");
    const addProductProgress = $("#add-product-progress");
    const addProductProgressBar = $("#add-product-progress-bar");
    const addCategoryAlert = $("#add-category-alert");
    const updateCategoryAlert = $("#update-category-alert");
    const deleteCategoryAlert = $("#delete-category-alert");
    
    // EVENT LISTENER
    
    // EVENT LISTENER FOR ADD PRODUCT FORM SUBMIT
    $("#form-add-product").on('submit', function(e) {
        
        e.preventDefault();

        const formData = new FormData($(this)[0]);
        $.ajax({
            url: "https://anaryaindika.com/majoo/create-product",
            async: false,
            type: "POST",
            data: formData,
            encType: 'multipart/form-date',
            processData: false,
            contentType: false,
            cache: false,            
            dataType: "JSON",
            beforeSend: function() {
                addProductProgress.fadeIn('fast');
            },
            xhr: function() {
                const xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(event) {
                    if (event.lengthComputable) {
                        var percentComplete = event.loaded/event.total;
                        addProductProgressBar.css("width", percentComplete + "%");
                        addProductProgressBar.attr("aria-valuenow", percentComplete);
                        addProductProgressBar.html(percentComplete+"%");
                    }
                }, false);
                return xhr;
            },            
            success: function(response) {
                if (response.success) {
                    addProductProgress.fadeOut('slow', function() {
                        addProductAlert.html(response.message).addClass("alert-success").removeClass("alert-danger").fadeIn('fast');
                    });
                } else {
                    addProductProgress.fadeOut('slow', function() {
                        addProductAlert.html(response.message).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                    });
                }
            },
            error: function(xhr, thrownError) {
                addProductProgress.fadeOut('slow', function() {
                    addProductProgress.html("Error: " + xhr.status + ". " + xhr.responseText).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                })                
                showError(xhr, thrownError);
            }
        });
    });

    // EVENT LISTENER FOR ADD CATEGORY FORM SUBMIT
    $("#form-add-category").on('submit', function(e) {
        
        e.preventDefault();

        $.ajax({                        
            url: "https://anaryaindika.com/majoo/create-category",
            async: false,
            type: "POST",
            data: $(this).serialize(),            
            dataType: "JSON",                                  
            success: function(response) {                
                if (response.success) {
                    addCategoryAlert.html(response.message).addClass("alert-success").removeClass("alert-danger").fadeIn('fast');                    
                    $("#category-"+$("#inputCategoryId").val()).html($('#inputUpdateCategoryName').val());
                } else {
                    addCategoryAlert.html(response.message).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                }
            },
            error: function(xhr, thrownError) {
                addCategoryAlert.html("Error: " + xhr.status + ". " + xhr.responseText).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                showError(xhr, thrownError);
            }
        });
    });

    // EVENT LISTENER FOR UPDATE CATEGORY FORM SUBMIT
    $("#form-update-category").on('submit', function(e) {
        
        e.preventDefault();

        $.ajax({                        
            url: "https://anaryaindika.com/majoo/update-category",            
            type: "POST",
            data: $(this).serialize(),            
            dataType: "JSON",                                  
            success: function(response) {                
                if (response.success) {
                    updateCategoryAlert.html(response.message).addClass("alert-success").removeClass("alert-danger").fadeIn('fast');
                    $("#category-"+$("#inputCategoryId").val()).html($('#inputUpdateCategoryName').val());
                } else {
                    updateCategoryAlert.html(response.message).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                }
            },
            error: function(xhr, thrownError) {
                updateCategoryAlert.html("Error: " + xhr.status + ". " + xhr.responseText).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                showError(xhr, thrownError);
            }
        });
    });

    // EVENT LISTENER FOR DELETE CATEGORY
    $("#confirm-delete-category-btn").on('click', function() {
        $.ajax({                        
            url: "https://anaryaindika.com/majoo/delete-category",            
            type: "POST",
            data: {
                id: $(this).val()
            },
            dataType: "JSON",
            success: function(response) {                
                if (response.success) {
                    deleteCategoryAlert.html(response.message).addClass("alert-success").removeClass("alert-danger").fadeIn('fast');
                    $("#category-" + $(this).val()).remove();
                } else {
                    deleteCategoryAlert.html(response.message).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                }
            },
            error: function(xhr, thrownError) {
                deleteCategoryAlert.html("Error: " + xhr.status + ". " + xhr.responseText).addClass("alert-danger").removeClass("alert-success").fadeIn('fast');
                showError(xhr, thrownError);
            }
        });
    });

    // EVENT LISTENER FOR SHOW PHOTO BUTTON
    $(".show-photo-btn").click(function() {
        $('#product-photo').attr('src', "https://anaryaindika.com/majoo/public/images/product/"+$(this).val());
    });

    // EVENT LISTENER FOR UPDATE CATEGORY MODAL BUTTON
    $(".update-category-btn").click(function() {
        $('#inputCategoryId').val($(this).val());        
    });

    // EVENT LISTENER FOR DELETE CATEGORY MODAL BUTTON
    $(".delete-category-btn").click(function() {
        $('#confirm-delete-category-btn').val($(this).val());        
    });

    // EVENT LISTENER FOR SELECT CATEGORY
    // $("#select-category-btn").click(function() {

    // });

    // EVENT LISTENER FOR PRODUCT LIST LINK
    
    // EVENT LISTENER FOR PRODUCT CATEGORY LINK
    $("#product-category").on('click', function() {

    });

    // EVENT LISTENER FOR LOGOUT LINK
    $("#logout-link").on('click', function() {        
        $.ajax({
            url: 'https://anaryaindika.com/majoo/logout',
            type: 'POST',
            dataType: 'JSON',
            success: function(response) {
                console.log(response);
                if (response.success) {
                    location.assign("https://anaryaindika.com/majoo/login");
                }
            },
            error: function(xhr, thrownError) {
                showError(xhr, thrownError);
            }
        })
    });

    // END OF EVENT LISTENER

    // FUNCTIONS

    // FUNCTION TO SHOW AJAX ERROR
    function showError(xhr, thrownError) {        
        console.log("Error Code: " + xhr.status + " " + xhr.statusText + "\n" + xhr.responseText + "\n" + thrownError);
    }
    // END OF FUNCTIONS
});