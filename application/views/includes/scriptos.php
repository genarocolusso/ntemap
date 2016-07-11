         <script src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
       <!--<script src="https://maps.googleapis.com/maps/api/js?libraries=places?key=AIzaSyBou0TGGwJzStMh2ZM8OuJFaIa7uZM9BNo&signed_in=true&callback=initMap"
        async defer></script> -->
       <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false" ></script>
     <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
         <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>  
         <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script> 
         <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
         <script src="<?php echo base_url(); ?>js/lightbox.js"></script>
         <script>
              new WOW().init();
         </script>
         <script type="text/javascript" src='//www.google-analytics.com/analytics.js' async defer></script>
         <script>
<?php
$ip = null;
if(filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
elseif(filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else
            $ip = $_SERVER['REMOTE_ADDR'];
?>
       window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
       ga('create', 'UA-77043326-3', 'auto');
       ga('set', 'metric1', "<?=$ip?>");
       ga('set', 'dimension1',"<?=$ip?>");
       ga('send', 'pageview');
</script>
                
