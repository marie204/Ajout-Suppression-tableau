<!DOCTYPE html>
<html>
  <head>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Ajax - Get</title>
  </head>
  
  <body>
    <button id="action">Requête</button><br />
    <script>
      $(function() {
        $('#action').click(function() {
          $.get(, function(data) {
            console.log(data);
          });    
        });  
      });
      </script>
  </body>
</html>








