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
        timeout: 30000
    });
})();

// setTimeout(refresher, 1000);
//
// (function poll(){
//     $.ajax({ url: "server", success: function(data){
//             //Update your dashboard gauge
//             salesGauge.setValue(data.value);
//         }, dataType: "json", complete: poll, timeout: 30000 });
// })();