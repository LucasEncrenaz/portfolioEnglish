jQuery( ".contentMenu .fa-bars" ).click(function() {
    jQuery( ".contentMenu .menuMobile" ).toggle();
    jQuery( ".contentMenu .fa-bars" ).toggle();
    jQuery( ".contentMenu .fa-times" ).toggle();
});

jQuery( ".contentMenu .fa-times" ).click(function() {
    jQuery( ".contentMenu .menuMobile" ).toggle();
    jQuery( ".contentMenu .fa-bars" ).toggle();
    jQuery( ".contentMenu .fa-times" ).toggle();
});

jQuery( ".contentMenu .menuMobile .itemMobile .linkMobile" ).click(function() {
    jQuery( ".contentMenu .fa-bars" ).toggle();
    jQuery( ".contentMenu .fa-times" ).toggle();
    jQuery( ".contentMenu .menuMobile" ).css("display", "none");
});