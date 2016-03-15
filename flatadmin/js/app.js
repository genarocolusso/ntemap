

(function() {
  $(function() {
    $(".navbar-expand-toggle").click(function() {
      $(".app-container").toggleClass("expanded");
      return $(".navbar-expand-toggle").toggleClass("fa-rotate-90");
    });
    return $(".navbar-right-expand-toggle").click(function() {
      $(".navbar-right").toggleClass("expanded");
      return $(".navbar-right-expand-toggle").toggleClass("fa-rotate-90");
    });
  });

  $(function() {
    $('.input-checkbox, .input-radio').iCheck({
      checkboxClass: 'icheckbox_flat',
      radioClass: 'iradio_flat'
    });
  });

  $(function() { 
  });

  $(function() {
    return $('.toggle-checkbox').bootstrapSwitch();
  });

  $(function() {
    return $('.match-height').matchHeight();
  });

  $(function() {
    return $('.datatable').DataTable({
      "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
    });
  });




}).call(this);
$('#example').DataTable();

$(document).on("click", ".message-block",  function(){
   
  $("#contato").val($(".hiddeninfo", this).attr("contato"));
  $("#endereco").val($(".hiddeninfo",this).attr("endereco"));
  $("#email").val($(".hiddeninfo",this).attr("email"));
  $("#coordenacao").val($(".hiddeninfo",this).attr("coordenacao"));
  $("#coordemail").val($(".hiddeninfo",this).attr("coordemail"));
  $("#selectbasic").val($(".hiddeninfo",this).attr("idpolo"));
  $("#id_polo_click").val($(".hiddeninfo",this).attr("idpolo"));

  $("#idpolo").val($(".hiddeninfo", this).attr("idpolo"));
  $("#nomecurso").val($(".hiddeninfo",this).attr("nome"));
  $("#numalunos").val($(".hiddeninfo",this).attr("numalunos"));
  $("#graduacao").val($(".hiddeninfo",this).attr("graduacao"));
  $("#hiddenidcurso").val($(".hiddeninfo",this).attr("idcurso"));


});

$(document).on("click",'.deletepolo', function(){

   $("#idpolo").val($(this).attr('poloid'));
   $("#ativo").val($(this).attr('ativo'));
    $("#atualizastatus").submit();
});
$(document).on('click', '.passadelete', function(){
     $("#modalpradeleta").attr("poloid",($(this).attr('poloid')));
});
$(document).on("click",'.deletepoloforreal', function(){

   $("#deletedid").val($(this).attr('poloid'));
 
    $("#deletarpolo").submit();
});

$("#botaopraenviarpromapa").on("click", function(){
                        //alert("ola");

                        $.ajax({ 

                          url: BASE_URL+'index.php/painel/cadastrar',
                          type: 'POST',
                          data: $("#addform").serializeArray(),                                
                          success: function(msg){


                            $(".msgaviso").html(msg);
                            $(".msgaviso").addClass("active");
                            setTimeout(function(){ $(".msgaviso").removeClass("active");  


                              $.ajax({
                                url:        'mostratabela',
                                type:       'POST',
                                cache:      false,
                                success: function(gg){        

                                  $('.tabeladospolos').html(gg);
                                  $('#example').DataTable();
                                }           
                              });
                            }, 5000);

                            jQuery.fn.reset = function(){
                              $(this).each(function(){ this.reset();});
                            }

                            document.getElementById("addform").reset();

                          }
                        });
return false;
});


$("#infoform").on("submit", function(){
  
                        //alert("ola"); 
                        $.ajax({

                          url: BASE_URL+'painel/atualizarpolo',
                          type: 'POST',
                          data: $("#infoform").serializeArray(),                                
                          success: function(msg){ 

                            $(".msgaviso").html(msg);
                            $(".msgaviso").addClass("active");
                            setTimeout(function(){ $(".msgaviso").removeClass("active");  
                             $.ajax({
                              url:        BASE_URL+'painel/mostradadosatualizados',
                              type:       'POST',
                              cache:      false,
                              success: function(gg){        

                                $('.message-list').html(gg);

                              }           
                            });
                           }, 4000);

                            jQuery.fn.reset = function(){
                              $(this).each(function(){ this.reset();});
                            }

                            document.getElementById("infoform").reset();

                          }
                        });
return false;
});

$("#addcurso").on("submit", function(){
                        //alert("ola"); 
                        $.ajax({

                          url: BASE_URL+'painel/cadastrarcurso',
                          type: 'POST',
                          data: $("#addcurso").serializeArray(),                                
                          success: function(msg){ 

                            $(".msgaviso").html(msg);
                            $(".msgaviso").addClass("active");
                            setTimeout(function(){ $(".msgaviso").removeClass("active");  
                            /* $.ajax({
                              url:        BASE_URL+'painel/mostradadosatualizados',
                              type:       'POST',
                              cache:      false,
                              success: function(gg){        

                                $('.message-list').html(gg);

                              }           
                            }); */
                           }, 4000);

                            jQuery.fn.reset = function(){
                              $(this).each(function(){ this.reset();});
                            }

                            document.getElementById("addcurso").reset();

                          }
                        });
return false;
});