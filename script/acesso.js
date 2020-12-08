$(function(){
    $("button#btnEntrar").on("click", function(e){
        e.preventDefault();

        var campoEmail = $("form#formularioLogin #email").val();
        var campoSenha = $("form#formularioLogin #senha").val();

        if(campoEmail.trim() == "" || campoSenha.trim() == ""){
            $("div#mensagem").show().html("Preencha todos os campos.");
        }else{
            $.ajax({
                url: "acoes/login.php",
                type: "POST",
                data: {
                    email: campoEmail,
                    senha: campoSenha
                },

                success: function(retorno){
                    try{
                        retorno = JSON.parse(retorno);
                    }catch{
                        
                    }

                    if(retorno["erro"]){
                        $("div#mensagem").show().html(retorno["mensagem"]);
                    }else{
                        window.location = "dashboard.php";
                    }
                },
                
                error: function(){
                    $("div#mensagem").show().html("Ocorreu um erro durante a solicitação.");
                }
            });   
        } 
    });
});