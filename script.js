
$(document).ready(function(e){


    /*BOTAO MENU E SUAS FUNÇÕES*/
    $(function(e){
        var tamanho = $(window).width();
    //alert(tamanho);
    /* var tamanho2 = $("li").offsetParent().width();
    alert(tamanho2);*/

        if(tamanho > 1024){
            $('nav').show(0);
            $('#reverterI').click(function(){
            $('.locali').hide(0);  
        });
            }
        else if(tamanho <= 1024){
            $(document).ready(function(e){ 
                 $('nav').hide(0);
                $('body').show(0);
                $('.locali').show(500);  
            });
            $('.locali').hide(0);
            
            $('#reverterM').click( reverterObjetoM);
            
            $('#reverterM').click( reverterObjeto);
            
            $('#reverterI').click( reverterObjeto);
            
            $('#reverterI').click(function(){
            $('.locali').show(500);  
            });
            
            $('#reverterO').click( reverterObjeto);
            
            $('#reverterO').click(function(){
                 $('#bdy').hide(0);
            });
            
            $('#reverterS').click( reverterObjeto);
            
             $('#reverterS').click(function(){
                $('.locali').show(500);  
            });
            $('#reverterL').click( reverterObjeto);
            
            $('#reverterC').click( reverterObjeto); 
            }
            $('#reverterC').click(function(){
                $('.locali').show(500);  
            });
    
        
            function reverterObjeto() {
                $('nav').fadeToggle(100);
                $('#bdy').show(0);
             }

            function reverterObjetoM() {
               $(function(e){
                $('.locali').show(500);  
                $('#bdy').hide(0).css('display','none');
                $('.menu-toggle').css('font-size','24px','transtion',0.5);
               });
            }

        });
 });


$(document).ready(function(e){ 
    
        /*BOTÕES SERVIÇOES E ACESSÓRIOS*/
        $(function(e){
            $('#bg8').hide(0);
            $('#bg9').hide(0);
        });
        $('.servicos').click(aparecerBox);


        $('.acessorios').click(aparecerBoxf);


         function aparecerBox(){
             $('#bg8').toggle(500);
            if(tamanho < 1024){
            $('#bg9').hide(500);
           $('.locali').css('heigth','100%');
            }
       }
        function aparecerBoxf(){
            $('#bg9').toggle(500);
            if(tamanho < 1024){
            $('#bg8').toggle(500);
            $('.locali').css('heigth','100%');
            }


     }
    

        /*FORMULARIO E INPUTS*/
    $(document).ready(function(e){
         $('#name').css('transform','translateY(-30px)').css('position','absolute').css('font-size','14px').css('opacity','1').css('color','#07527c');
    }); 
    
        /*Colocar foco nos inputs*/

        $('.input').focus(function(e){
            $(this).parent().addClass('focus');
            $('input').css('font-size','12px');

        }).blur(function(e){
            if($(this).val() === ''){
                /*quando tira o foco do input, remove placeholder*/
                $(this).parent().removeClass('focus');
                $('#telefone').removeAttr('placeholder','ex(DDD xxxxx-xxxx)');
                $('#modelo').removeAttr('placeholder','ex:(SM-J700H/DS)');
                $('#defeito').removeAttr('placeholder','Defeito do Aparelho');
                $('#marca').removeAttr('placeholder','Marca do Aparelho');
                $('#name').css('transform','translateY(0px)').css('position','absolute').css('font-size','14px').css('opacity','.5').css('color','#000');
            }
        });
        $('#nome').focus(function(e){                                                                           $('#name').css('transform','translateY(-30px)'); 
            $('#name').css('position','absolute'); 
            $('#name').css('font-   size','14px');
            $('#name').css('opacity','1');
            $('#name').css('color','#07527c');
            });
            $('#telefone').click(function(e){
                 $('#telefone').attr('placeholder','ex:(DDD xxxxx-xxxx)');
            });

            $('#modelo').click(function(e){
                 $('#modelo').attr('placeholder','ex:(SM-J700H/DS)');
            });
            $('#marca').click(function(e){
                 $('#marca').attr('placeholder','Marca do Aparelho');
            });
            $('#defeito').click(function(e){
                 $('#defeito').attr('placeholder','Defeito do Aparelho');

            });

        /*carregar modal na página e verificar se já foi carregado e não carregar novamente*/
     $(document).ready(function(e){
         if(localStorage){  
             if(!localStorage.getItem('ja_visitei')){
                swal ( "Bem vindo(a)" , "Recomendamos acessar com o Google Chrome ou Firefox " );
                 localStorage.setItem('ja_visitei', true);
             }
         }
     });
           

}); /*Fim do Dom carregado*/



           


 




    


    

    

    

   
        
    
       