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
          $.get({
          	url: 'http://api.petfinder.com/',
          	data: {
          		key: '8f973d24c6594e76da18a59a30915e9c', 

          	}
          }, function(data) {
            console.log(data);
          });    
        });  
      });
      </script>
  </body>
</html>








