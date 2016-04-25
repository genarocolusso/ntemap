        <footer class="app-footer">
          <div class="wrapper">
            <span class="pull-right">2.0 <a href=""><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
          </div>
        </footer>
      </div>
      <!-- Javascript Libs -->
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/chartjs/Chart.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/iCheck/icheck.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/matchHeight/jquery.matchHeight-min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/bower_components/select2/dist/js/select2.full.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/vendor/js/dataTables.bootstrap.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/vendor/js/ace/ace.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/vendor/js/ace/mode-html.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/vendor/js/ace/theme-github.js"></script>
      <!-- Javascript -->
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/js/app.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>flatadmin/js/index.js"></script>
      <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>

      <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
      <script>
      new WOW().init();
      </script>
      <script type="text/javascript">
      $(document).ready(function(){

        $('#example').DataTable({
         "language": {
          "url": "cdn.datatables.net/plug-ins/1.10.11/i18n/Portuguese-Brasil.json"
        }
      }
      );

        $("#botaopraenviarpromapa").click(function(){
                        //alert("ola");

                        $.ajax({ 

                          url: 'painel/cadastrar',
                          type: 'POST',
                          data: $("#addform").serializeArray(),                                
                          success: function(msg){


                            $(".msgaviso").html(msg);
                            $(".msgaviso").addClass("active");
                            setInterval(function(){ $(".msgaviso").removeClass("active");  


                              $.ajax({
                                url:        'painel/mostratabela',
                                type:       'POST',
                                cache:      false,
                                success: function(gg){        
                                  alert(gg);            
                                  $('.tabeladospolos').html(gg);
                                  $('#example').DataTable();
                                }           
                              });
                            }, 5000);


                            $("#addform").reset();

                          }
                        });
        return false;
      });
      });     
        </script>
