$(document).ready(function() {
    
    var origWidth;
    
    $("#expandButton").click(function()
    {
        expanded = $(this).data('expanded');
        if(expanded == 'false')
        {
            $(this).data('expanded','true')
            console.log("Expanding");
            $(".container").css('width', '100%');
        }
        else{
             $(this).data('expanded','false')
        console.log("CLosing");
        $(".container").css('width', 'auto');  
        }
    });   
});