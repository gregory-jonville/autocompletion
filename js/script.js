$(document).ready(function(){
    $("#search").keyup(function(){
        var search = $(this).val();
        console.log(search);
        if(search != ""){
            $.ajax({
                url: 'recherche.php',
                type: 'GET',
                data: {search:search},
                dataType: 'json',
                success:function(response){
                    var len = response.length;
                    $("ul").empty();
                    for( var i = 0; i<len; i++){
                        $("ul").append("<li value="+response[i]['nom']+"</li>");
                    }
                }
            });
        } else {
            $("ul").empty();
        }
    });
});



