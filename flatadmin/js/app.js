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
    return $('select').select2();
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


  $('#example').DataTable();
             
                $("#botaopraenviarpromapa").click(function(){
                        //alert("ola");
                       
                        $.ajax({ 

                                url: 'painel/cadastrar',
                                type: 'POST',
                                data: $("#addform").serializeArray(),                                
                                success: function(msg){
                                     
                                     
                                      $(".msgaviso").html(msg);
                                      $(".msgaviso").addClass("active");
                                      setInterval(function(){ $(".msgaviso").removeClass("active"); }, 5000);
                                        jQuery.fn.reset = function(){
                                                $(this).each(function(){ this.reset();});
                                            }
                                        $("#addform").reset();
                                    
                                    }
                            });
                        return false;
                    });

}).call(this);