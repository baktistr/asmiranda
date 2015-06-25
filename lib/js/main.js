// --- TAB PANE --- //
$(function(){
    $('.dropdown-toggle').dropdown();
    $('#dashboardTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });            
});

// Add Hash Value # in Tab Pane
$(document).ready(function() {
    if(location.hash) {
        $('a[href=' + location.hash + ']').tab('show');
    }
    $(document.body).on("click", "a[data-toggle]", function(event) {
        location.hash = this.getAttribute("href");
    });
});
$(window).on('popstate', function() {
    var anchor = location.hash || $("a[data-toggle=tab]").first().attr("href");
    $('a[href=' + anchor + ']').tab('show');
});


// Tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

// -- BUTTON CLICK HANDLER -- //
$(document).ready( function() {
    $(".unit_delete").click( function() {
        var unit_id = $(this).data('id');
        var unit_name = $(this).data('name');
        if ( confirm('Are you sure to delete '+unit_name+'?') ) {
             window.location = "/admin/delete_unit/"+unit_id;
        }
        
    });

    $(".staff_delete").click( function() {
        var staff_id = $(this).data('id');
        var staff_name = $(this).data('name');
        if ( confirm('Are you sure to delete '+staff_name+'?') ) {
             window.location = "/admin/delete_staff/"+staff_id;
        }
    });

    $(".doc_list_delete").click( function() {
        
        var dt_id = $(this).data('id');
        var dt_name = $(this).data('name');
        if ( confirm('Are you sure to delete '+dt_name+'?') ) {
             window.location = "/documents/delete_doc_class/"+dt_id;
        }
    });
     
});

