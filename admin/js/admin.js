$(document).ready(function() {
    
    var initialWidth = $('.container').width();
    
    $("#expandButton").click(function()
    {
        expanded = $(this).data('expanded');
        if(expanded == 'false')
        {
            $(this).data('expanded','true')
            console.log("Expanding");
            $(".container").css('width', '100%');
            $('#expandButton').text("Collapse");
        }
        else{
             $(this).data('expanded','false')
        console.log("CLosing");
        $('.container').css('width',initialWidth);
            $('#expandButton').text("Expand");
        }
    });   
});