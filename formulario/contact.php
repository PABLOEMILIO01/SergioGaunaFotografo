<?php
 
   if(isset($_POST[`enviar`])) {
    if (!empty($_POST{`name`}) && !empty($_POST{`quefestejas`}) && !empty($_POST{`telefono`}) && !empty($_POST{`email`}) && !empty($_POST{`motivo`}) && !empty($_POST{`msg`})) {
      $name = $_POST[`name`];
      $quefestejas = $_POST{`quefestejas`};
      $telefono = $_POST{`telefono`};
      $email = $_POST{`email`};
      $motivo = $_POST{`motivo`};
      $msg = $_POST{`msg`};
      $header = "from: noreply@example.com" . "\r\n";
      $header.= "Reply-to:  noreply@example.com" . "\r\n";
      $header.= "X-Mailer: PHP/". phpversion();
      $mail = @mail($email,$asunto,$msg,$header);
      if ($mail) {
          echo "<h4>¡Enviado Con Exito</h4>";
      }

    }
   }

  
?>
