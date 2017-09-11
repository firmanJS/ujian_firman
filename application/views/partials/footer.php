<script type="text/javascript" src="lib/js/jquery.min.js"></script>
<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/js/angular.min.js"></script>
<?php
if(isset($js)){
  if(is_array($js)){
    foreach($js as $j){
      echo '<script type="text/javascript" src="'.$j.'"></script>';
    }
  }else{
    echo '<script type="text/javascript" src="'.$js.'"></script>';
  }
}
?>
<script type="text/javascript">
window.setTimeout(function() {
  $(".alert").fadeTo(300, 0).slideUp(500, function(){
    $(this).remove();
  });
}, 2000);
</script>
</body>
</html>
