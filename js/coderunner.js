            function updateOutput()
            {
                $("iframe").contents().find("html").html("<html><head><style type='text/css'>"
                +$("#cssPanel").val()+"</style></head><body>"+$("#htmlPanel").val()+"</body></html>");
                document.getElementById("opPanel").contentWindow.eval($("#jsPanel").val());
                
            }
               $(".toggle").hover(function(){
                   $(this).addClass("heighlightedColor");
               },function(){
                   $(this).removeClass("heighlightedColor");
               }
                                  
            );
            $(".toggle").click(function(){
                   $(this).toggleClass("active");
                    $(this).removeClass("heighlightedColor");
                    var panelId=$(this).attr("id")+"Panel";
                    $("#"+panelId).toggleClass("hidden");        //To toggle hidden/show
                   var activePanel=4-$(".hidden").length;
                    $(".panel").width(($(window).width()/activePanel)-5);
               }
            );
            $(".panel").height($(window).height()-$(".panel").height()-20);
            $(".panel").width(($(window).width()/2)-5);
            updateOutput();
            $("textarea").on('change keyup paste',updateOutput );