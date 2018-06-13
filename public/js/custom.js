(function refresher(){
    jQuery.ajax({
        url: '/index.php',
        type: 'get',
        success: function (response) {
            console.log(response);
            var new_data = jQuery(response).find('.content');
            jQuery('.content').html('').html(jQuery(new_data).html()).fadeIn()
        },
        complete: refresher,
        timeout: 72000
    });
})();