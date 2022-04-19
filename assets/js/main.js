$(document).ready(function(){

    //check for link with delete class
    if($("a.delete").length){
        $("a.delete").click(function(e){
            e.preventDefault();
            if(confirm("Вы уверены?")){
                window.location.href = $(this).attr("href");
            }
        })
    }
});