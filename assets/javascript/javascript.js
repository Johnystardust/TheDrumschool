/**
 * Created by Tim on 7/7/2016.
 */
$(document).ready(function(){

    // Set maps height to contact form height
    var contactFormHeight = $('#form').height();
    $('#maps').height(contactFormHeight);

    $(window).resize(function(){
        // Set maps height to contact form height
        var contactFormHeight = $('#form').height();
        $('#maps').height(contactFormHeight);
    })

});