// On atttend que la page soit chargée
$(document).ready(function(){
    // On prend l'élément dont l'id est 'search' , 
    $("#search").keyup(function(){
        // On met ce qui est tapé par l'utilisateur dans une variable
        var search = $(this).val();
        console.log(search);
        if(search != ""){
            $.ajax({
                // Page vers laquelle sont 'lancées' les données
                url: 'recherche.php',
                type: 'GET',
                data: {search:search},
                dataType: 'json',
                // En cas de succès
                success:function(response){
                    // On prend le nombre de réponse(s)
                    var len = response.length;
                    $("ul").empty();
                    // On affiche les résultats
                    for( var i = 0; i<len; i++){
                        $("ul").append("<li class='reponse'>"+response[i]["nom"]+"</li>");
                    }
                    
                }
            });
        } else {
            $("ul").empty();
        }
    });
});



