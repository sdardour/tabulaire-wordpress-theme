/* --- */
jQuery(document).ready(function() {
    /* --- */
    jQuery("#tabulaire-f").focus();
    /* --- */
    jQuery("#tabulaire-f").keyup(function(event) {
        var txtop = {
                trim: function(text) {
                    return String(text).replace(/\s+/g, " ").trim();
                },
                toLowerCase: function(text) {
                    return String(text).toLowerCase();
                }
            },
            query = txtop.toLowerCase(txtop.trim(jQuery(this).val())),
            value = "";
        jQuery("#tabulaire-l").find("tr").addClass("hideme");
        jQuery("#tabulaire-l").find(".col-sm-7, .col-sm-3").each(function(index) {
            var value = txtop.toLowerCase(txtop.trim(jQuery(this).text()));
            if (query.length > 0) {
                if (value.indexOf(query) > -1) {
                    jQuery(this).parent().removeClass("hideme");
                }
            } else {
                jQuery(this).parent().removeClass("hideme");
            }
        });
    });
    /* --- */
    jQuery("#tabulaire-f").keydown(function(event) {
        if (event.which == 27) {
            event.preventDefault();
            jQuery(this).val("");
            jQuery("#tabulaire-l").find("tr").removeClass("hideme");
        }
        if (event.which == 13) {
            event.preventDefault();
            jQuery("#tabulaire-l").find("tr").each(function(index) {
                if (jQuery(this).css("height") != "0px") {
                    window.location.href = jQuery(this).find(".col-sm-7").find("a").attr("href");
                    return false;
                }
            });
        }
    });
    /* --- */
});
/* --- */