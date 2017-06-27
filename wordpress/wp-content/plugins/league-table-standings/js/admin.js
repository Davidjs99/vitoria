// show message

function showMessage(message)
{
   jQuery("#ltswp_dialog").show();
}
// Save settings for Global.
function ltswp_click_credit_link()
{



       var state = jQuery('#ltswp_author_linking').attr('checked') ? '1' : '0';
        var dataLink = {
            action  : 'ltswp_set_support_link',
            state   : state
        };

        jQuery.post(ajax_object.ajax_url, dataLink, function(respond) {
            if(jQuery('#ltswp_author_linking').attr('checked')){
                jQuery("#ltswp_support_title_1").hide();
                jQuery("#ltswp_support_title_2").show();
                jQuery("#ltswp_support_title_3").hide();
            }
            else {
                jQuery('#ltswp-notice-support-view').show();
                jQuery("#ltswp_support_title_1").show();
                jQuery("#ltswp_support_title_2").hide();
                jQuery("#ltswp_support_title_3").hide();
            }
        });

}
