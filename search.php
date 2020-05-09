<html>
<?php include('views/head.php'); ?>
<body>
<?php include('views/header.php'); ?>

<script>   $.get( "controllers/search_form.php",{search:"" } )
, function( data ) {
  $( ".result" ).html( data );
  alert( "Load was performed." );
});

</script>












</body>
</html>