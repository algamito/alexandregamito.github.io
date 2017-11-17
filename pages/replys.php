<!-- <?php require '../config/ini.php'; ?> -->
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alexandre Gamito</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="../style/css/foundation.css" /> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="style/jquery.touchSwipe.min.js"></script>

  </head>
  <body>
    <form action="replys.php" method="post">
      <input type="text" name="check" class="consultar">
      <input type="submit" value="Check">
    </form>
    

    <?php 
    if (isset($_POST['check'])) {
      if ($_POST['check'] == 'me') {
        $re = '';
        $s = "SELECT * FROM contact ORDER BY timestamp DESC";
        if ($q = $db->query($s)) {
          $re .= '<ul>';
          while ($r = $q->fetch_object()) {
            $re .= '<li><div>Nome: '.$r->nome.'</div><div>Email: '.$r->email.'</div><div>Comment: '.$r->comentario.'</div><div>When: '.date('dMy', strtotime($r->timestamp)).'</div></li>';
          }
          echo $re.'</ul>';
        }
      }
    }
     

     ?>

    <script>
      // jQuery(document).ready(function() {
      //   $('button').click(function() {
      //     var t = $('.consultar').val();
      //     alert(t)
      //     $.ajax({
      //       url: '../edit_pages/index_edit.php',
      //       data: { check_contact: '' , t: t},
      //       type: 'post',
      //       success: function(data) {
      //         $('body').append(data);
      //         alert(data);
      //       }
      //     });
      //   })
      // })
    </script>
  </body>
</html>