
$(document).ready(function(){


        // change password
        $("input[type=password]").keyup(function(){
            var ucase = new RegExp("[A-Z]+");
            var lcase = new RegExp("[a-z]+");
            var num = new RegExp("[0-9]+");
            
            if($("#password_new").val().length >= 8){
                $("#8char").removeClass("glyphicon-remove");
                $("#8char").addClass("glyphicon-ok");
                $("#8char").css("color","#00A41E");
            }else{
                $("#8char").removeClass("glyphicon-ok");
                $("#8char").addClass("glyphicon-remove");
                $("#8char").css("color","#FF0004");
            }
            
            if(ucase.test($("#password_new").val())){
                $("#ucase").removeClass("glyphicon-remove");
                $("#ucase").addClass("glyphicon-ok");
                $("#ucase").css("color","#00A41E");
            }else{
                $("#ucase").removeClass("glyphicon-ok");
                $("#ucase").addClass("glyphicon-remove");
                $("#ucase").css("color","#FF0004");
            }
            
            if(lcase.test($("#password_new").val())){
                $("#lcase").removeClass("glyphicon-remove");
                $("#lcase").addClass("glyphicon-ok");
                $("#lcase").css("color","#00A41E");
            }else{
                $("#lcase").removeClass("glyphicon-ok");
                $("#lcase").addClass("glyphicon-remove");
                $("#lcase").css("color","#FF0004");
            }
            
            if(num.test($("#password_new").val())){
                $("#num").removeClass("glyphicon-remove");
                $("#num").addClass("glyphicon-ok");
                $("#num").css("color","#00A41E");
            }else{
                $("#num").removeClass("glyphicon-ok");
                $("#num").addClass("glyphicon-remove");
                $("#num").css("color","#FF0004");
            }
            
            if($("#password_new").val() == $("#password_new_again").val() && $("#password_new_again").val() != ''){
                
                $("#pwmatch").removeClass("glyphicon-remove");
                $("#pwmatch").addClass("glyphicon-ok");
                $("#pwmatch").css("color","#00A41E");
                
            }else{
                $("#pwmatch").removeClass("glyphicon-ok");
                $("#pwmatch").addClass("glyphicon-remove");
                $("#pwmatch").css("color","#FF0004");
            }

            if(!($("#passwordForm span").hasClass( "glyphicon-remove" ))){
                console.log("here i XXXX am")
                $("#changepass-submit").removeClass("disabled");
            }
        });
        // change password
})