<?php
      $sms="";
      if ( isset($_SESSION['stat']) ) {
            $valorSta=$_SESSION['stat'];
            switch ($valorSta) {
                  case 'hash': $_SESSION['SMStrue'] = $sms='<strong>Se encriptó</strong> tu contraseña con éxito.'; break;
                  case 'generado': $_SESSION['SMStrue'] = $sms='<strong>Se generó</strong> el cadena con éxito.'; break;
                  case 'encode': $_SESSION['SMStrue'] = $sms='<strong>Se codificó</strong> el contenido con éxito.'; break;
                  case 'decode': $_SESSION['SMStrue'] = $sms='<strong>Se decodificó</strong> el contenido con éxito.'; break;
                  case 'add': $_SESSION['SMStrue'] = $sms='<strong>Se guardó</strong> el registro con éxito.'; break;
                  case 'pagado': $_SESSION['SMStrue'] = $sms='<strong>Se cobró</strong> el registro con éxito.'; break;
                  case 'send': $_SESSION['SMStrue'] = $sms='<strong>Se envió</strong> el mensaje con éxito.'; break;
                  case 'edit': $_SESSION['SMStrue'] = $sms='<strong>Se editó</strong> el registro con éxito.'; break;
                  case 'drop': $_SESSION['SMStrue'] = $sms='<strong>Se eliminó</strong> el registro con éxito.'; break;
                  case 'lock': $_SESSION['SMStrue'] = $sms='<strong>Se Bloqueó</strong> la Dirección IP con éxito.'; break;
                  case 'unlock': $_SESSION['SMStrue'] = $sms='<strong>Se Desbloqueó</strong> la Dirección IP con éxito.'; break;
                  case 'active': $_SESSION['SMStrue'] = $sms='<strong>Se Activó</strong> el Registro con éxito.'; break;
                  case 'desactive': $_SESSION['SMStrue'] = $sms='<strong>Se Desactivó</strong> el Registro con éxito.'; break;
                  case 'addP': $_SESSION['SMStrue'] = $sms='Se Compartió la Publicación con Éxito.';break;
                  case 'addC': $_SESSION['SMStrue'] = $sms='Se Agregó el comentario con Éxito.';break;
                  case 'dropP': $_SESSION['SMStrue'] = $sms='Se Eliminó la publicación con Éxito.';break;
                  case 'dropC': $_SESSION['SMStrue'] = $sms='Se Eliminó el comentario con Éxito.';break;
                  case 'editP': $_SESSION['SMStrue'] = $sms='Se Editó la Publicación con Éxito.';break;
                  case 'editC': $_SESSION['SMStrue'] = $sms='Se Editó el comentario con Éxito.';break;
                  case 'open': $_SESSION['SMStrue'] = $sms='<strong>Se aperturó</strong> el registro con éxito.'; break;
                  case 'close': $_SESSION['SMStrue'] = $sms='<strong>Se cerró</strong> el registro con éxito.'; break;
                  case 'import': $_SESSION['SMStrue'] = $sms='<strong>Se importó</strong> la información del CSV con éxito.'; break;
                  case 'asig': $_SESSION['SMStrue'] = $sms='<strong>Se asignó</strong> la información con éxito.'; break;
                  case 'nohash': $_SESSION['SMSfalse'] = $sms='<strong>No se logró Encriptar</strong> tu contraseña.'; break;
                  case 'nogenerado': $_SESSION['SMSfalse'] = $sms='<strong>No se logró generar</strong> la cadena.'; break;
                  case 'noencode': $_SESSION['SMSfalse'] = $sms='<strong>No se logró codificar</strong> el contenido.'; break;
                  case 'nodecode': $_SESSION['SMSfalse'] = $sms='<strong>No se logró decodificar</strong> el contenido.'; break;
                  case 'noadd': $_SESSION['SMSfalse'] = $sms='<strong>No se logró guardar</strong> el registro.'; break;
                  case 'nopagado': $_SESSION['SMSfalse'] = $sms='<strong>No se logró cobrar</strong> el registro.'; break;
                  case 'nosend': $_SESSION['SMSfalse'] = $sms='<strong>No se logró enviar</strong> el mensaje.'; break;
                  case 'noedit': $_SESSION['SMSfalse'] = $sms='<strong>No se logró editar</strong> el registro.'; break;
                  case 'nodrop': $_SESSION['SMSfalse'] = $sms='<strong>No se logró eliminar</strong> el registro.'; break;
                  case 'nounlock': $_SESSION['SMSfalse'] = $sms='<strong>No se logró Desbloquear</strong> la Dirección IP.'; break;
                  case 'nolock': $_SESSION['SMSfalse'] = $sms='<strong>No se logró Bloquear</strong> la Dirección IP.'; break;
                  case 'noactive': $_SESSION['SMSfalse'] = $sms='<strong>No se logró Activar</strong> el Registro.'; break;
                  case 'nodesactive': $_SESSION['SMSfalse'] = $sms='<strong>No se logró Desactivar</strong> el Registro.'; break;
                  case 'noopen': $_SESSION['SMSfalse'] = $sms='<strong>No se logró aperturar</strong> el registro.'; break;
                  case 'noclose': $_SESSION['SMSfalse'] = $sms='<strong>No se logró cerrar</strong> el registro.'; break;
                  case 'noimport': $_SESSION['SMSfalse'] = $sms='<strong>No se logró importar</strong> la información del CSV.'; break;
                  case 'noasig': $_SESSION['SMSfalse'] = $sms='<strong>No se logró asignar</strong> la información.'; break;
                  case 'noaddP': $_SESSION['SMSfalse'] = $sms='No se Compartió la Publicación.';break;
                  case 'noaddC': $_SESSION['SMSfalse'] = $sms='No se Agregó el Comentario.';break;
                  case 'nodropP': $_SESSION['SMSfalse'] = $sms='No se logró Eliminar la Publicación.';break;
                  case 'nodropC': $_SESSION['SMSfalse'] = $sms='No se logró Eliminar el Comentario.';break;
                  case 'noeditP': $_SESSION['SMSfalse'] = $sms='No se logró Editar la Publicación.';break;
                  case 'noeditC': $_SESSION['SMSfalse'] = $sms='No se logró Editar el Comentario.';break;
                  case 'null': $_SESSION['SMSnull'] = $sms='<strong>Se ingresarón campos Vacios.</strong> Intentelo nuevamente.'; break;
                  default: $sms='<div class="alert alert-info" role="alert">'.$_SESSION['stat'].' </div>'; break;
            }
      }
      $sms2="";
      if ( isset($_SESSION['stat2']) ) {
            $valorSta=$_SESSION['stat2'];
            switch ($valorSta) {
                  case 'hash': $_SESSION['SMStrue2'] = $sms2='<strong>Se encriptó</strong> tu contraseña con éxito.'; break;
                  case 'generado': $_SESSION['SMStrue2'] = $sms2='<strong>Se generó</strong> el cadena con éxito.'; break;
                  case 'encode': $_SESSION['SMStrue2'] = $sms2='<strong>Se codificó</strong> el contenido con éxito.'; break;
                  case 'decode': $_SESSION['SMStrue2'] = $sms2='<strong>Se decodificó</strong> el contenido con éxito.'; break;
                  case 'add': $_SESSION['SMStrue2'] = $sms2='<strong>Se guardó</strong> el registro con éxito.'; break;
                  case 'pagado': $_SESSION['SMStrue2'] = $sms2='<strong>Se cobró</strong> el registro con éxito.'; break;
                  case 'send': $_SESSION['SMStrue2'] = $sms2='<strong>Se envió</strong> el mensaje con éxito.'; break;
                  case 'edit': $_SESSION['SMStrue2'] = $sms2='<strong>Se editó</strong> el registro con éxito.'; break;
                  case 'drop': $_SESSION['SMStrue2'] = $sms2='<strong>Se eliminó</strong> el registro con éxito.'; break;
                  case 'lock': $_SESSION['SMStrue2'] = $sms2='<strong>Se Bloqueó</strong> la Dirección IP con éxito.'; break;
                  case 'unlock': $_SESSION['SMStrue2'] = $sms2='<strong>Se Desbloqueó</strong> la Dirección IP con éxito.'; break;
                  case 'active': $_SESSION['SMStrue2'] = $sms2='<strong>Se Activó</strong> el Registro con éxito.'; break;
                  case 'desactive': $_SESSION['SMStrue2'] = $sms2='<strong>Se Desactivó</strong> el Registro con éxito.'; break;
                  case 'addP': $_SESSION['SMStrue2'] = $sms2='Se Compartió la Publicación con Éxito.';break;
                  case 'addC': $_SESSION['SMStrue2'] = $sms2='Se Agregó el comentario con Éxito.';break;
                  case 'dropP': $_SESSION['SMStrue2'] = $sms2='Se Eliminó la publicación con Éxito.';break;
                  case 'dropC': $_SESSION['SMStrue2'] = $sms2='Se Eliminó el comentario con Éxito.';break;
                  case 'editP': $_SESSION['SMStrue2'] = $sms2='Se Editó la Publicación con Éxito.';break;
                  case 'editC': $_SESSION['SMStrue2'] = $sms2='Se Editó el comentario con Éxito.';break;
                  case 'open': $_SESSION['SMStrue2'] = $sms2='<strong>Se aperturó</strong> el registro con éxito.'; break;
                  case 'close': $_SESSION['SMStrue2'] = $sms2='<strong>Se cerró</strong> el registro con éxito.'; break;
                  case 'import': $_SESSION['SMStrue2'] = $sms2='<strong>Se importó</strong> la información del CSV con éxito.'; break;
                  case 'asig': $_SESSION['SMStrue2'] = $sms2='<strong>Se asignó</strong> la información con éxito.'; break;
                  case 'nohash': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró Encriptar</strong> tu contraseña.'; break;
                  case 'nogenerado': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró generar</strong> la cadena.'; break;
                  case 'noencode': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró codificar</strong> el contenido.'; break;
                  case 'nodecode': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró decodificar</strong> el contenido.'; break;
                  case 'noadd': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró guardar</strong> el registro.'; break;
                  case 'nopagado': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró cobrar</strong> el registro.'; break;
                  case 'nosend': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró enviar</strong> el mensaje.'; break;
                  case 'noedit': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró editar</strong> el registro.'; break;
                  case 'nodrop': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró eliminar</strong> el registro.'; break;
                  case 'nounlock': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró Desbloquear</strong> la Dirección IP.'; break;
                  case 'nolock': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró Bloquear</strong> la Dirección IP.'; break;
                  case 'noactive': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró Activar</strong> el Registro.'; break;
                  case 'nodesactive': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró Desactivar</strong> el Registro.'; break;
                  case 'noopen': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró aperturar</strong> el registro.'; break;
                  case 'noclose': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró cerrar</strong> el registro.'; break;
                  case 'noimport': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró importar</strong> la información del CSV.'; break;
                  case 'noasig': $_SESSION['SMSfalse2'] = $sms2='<strong>No se logró asignar</strong> la información.'; break;
                  case 'noaddP': $_SESSION['SMSfalse2'] = $sms2='No se Compartió la Publicación.';break;
                  case 'noaddC': $_SESSION['SMSfalse2'] = $sms2='No se Agregó el Comentario.';break;
                  case 'nodropP': $_SESSION['SMSfalse2'] = $sms2='No se logró Eliminar la Publicación.';break;
                  case 'nodropC': $_SESSION['SMSfalse2'] = $sms2='No se logró Eliminar el Comentario.';break;
                  case 'noeditP': $_SESSION['SMSfalse2'] = $sms2='No se logró Editar la Publicación.';break;
                  case 'noeditC': $_SESSION['SMSfalse2'] = $sms2='No se logró Editar el Comentario.';break;
                  case 'null': $_SESSION['SMSnull2'] = $sms2='<strong>Se ingresarón campos vacios.</strong> Intentelo nuevamente.'; break;
                  default: $sms='<div class="alert alert-info" role="alert">'.$_SESSION['stat2'].' </div>'; break;
            }
      }
      $sms3="";
      if ( isset($_SESSION['stat3']) ) {
            $valorSta=$_SESSION['stat3'];
            switch ($valorSta) {
                  case 'hash': $_SESSION['SMStrue3'] = $sms3='<strong>Se encriptó</strong> tu contraseña con éxito.'; break;
                  case 'generado': $_SESSION['SMStrue3'] = $sms3='<strong>Se generó</strong> el cadena con éxito.'; break;
                  case 'encode': $_SESSION['SMStrue3'] = $sms3='<strong>Se codificó</strong> el contenido con éxito.'; break;
                  case 'decode': $_SESSION['SMStrue3'] = $sms3='<strong>Se decodificó</strong> el contenido con éxito.'; break;
                  case 'add': $_SESSION['SMStrue3'] = $sms3='<strong>Se guardó</strong> el registro con éxito.'; break;
                  case 'pagado': $_SESSION['SMStrue3'] = $sms3='<strong>Se cobró</strong> el registro con éxito.'; break;
                  case 'send': $_SESSION['SMStrue3'] = $sms3='<strong>Se envió</strong> el mensaje con éxito.'; break;
                  case 'edit': $_SESSION['SMStrue3'] = $sms3='<strong>Se editó</strong> el registro con éxito.'; break;
                  case 'drop': $_SESSION['SMStrue3'] = $sms3='<strong>Se eliminó</strong> el registro con éxito.'; break;
                  case 'lock': $_SESSION['SMStrue3'] = $sms3='<strong>Se Bloqueó</strong> la Dirección IP con éxito.'; break;
                  case 'unlock': $_SESSION['SMStrue3'] = $sms3='<strong>Se Desbloqueó</strong> la Dirección IP con éxito.'; break;
                  case 'active': $_SESSION['SMStrue3'] = $sms3='<strong>Se Activó</strong> el Registro con éxito.'; break;
                  case 'desactive': $_SESSION['SMStrue3'] = $sms3='<strong>Se Desactivó</strong> el Registro con éxito.'; break;
                  case 'addP': $_SESSION['SMStrue3'] = $sms3='Se Compartió la Publicación con Éxito.';break;
                  case 'addC': $_SESSION['SMStrue3'] = $sms3='Se Agregó el comentario con Éxito.';break;
                  case 'dropP': $_SESSION['SMStrue3'] = $sms3='Se Eliminó la publicación con Éxito.';break;
                  case 'dropC': $_SESSION['SMStrue3'] = $sms3='Se Eliminó el comentario con Éxito.';break;
                  case 'editP': $_SESSION['SMStrue3'] = $sms3='Se Editó la Publicación con Éxito.';break;
                  case 'editC': $_SESSION['SMStrue3'] = $sms3='Se Editó el comentario con Éxito.';break;
                  case 'open': $_SESSION['SMStrue3'] = $sms3='<strong>Se aperturó</strong> el registro con éxito.'; break;
                  case 'close': $_SESSION['SMStrue3'] = $sms3='<strong>Se cerró</strong> el registro con éxito.'; break;
                  case 'import': $_SESSION['SMStrue3'] = $sms3='<strong>Se importó</strong> la información del CSV con éxito.'; break;
                  case 'asig': $_SESSION['SMStrue3'] = $sms3='<strong>Se asignó</strong> la información con éxito.'; break;
                  case 'nohash': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró Encriptar</strong> tu contraseña.'; break;
                  case 'nogenerado': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró generar</strong> la cadena.'; break;
                  case 'noencode': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró codificar</strong> el contenido.'; break;
                  case 'nodecode': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró decodificar</strong> el contenido.'; break;
                  case 'noadd': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró guardar</strong> el registro.'; break;
                  case 'nopagado': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró cobrar</strong> el registro.'; break;
                  case 'nosend': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró enviar</strong> el mensaje.'; break;
                  case 'noedit': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró editar</strong> el registro.'; break;
                  case 'nodrop': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró eliminar</strong> el registro.'; break;
                  case 'nounlock': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró Desbloquear</strong> la Dirección IP.'; break;
                  case 'nolock': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró Bloquear</strong> la Dirección IP.'; break;
                  case 'noactive': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró Activar</strong> el Registro.'; break;
                  case 'nodesactive': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró Desactivar</strong> el Registro.'; break;
                  case 'noopen': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró aperturar</strong> el registro.'; break;
                  case 'noclose': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró cerrar</strong> el registro.'; break;
                  case 'noimport': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró importar</strong> la información del CSV.'; break;
                  case 'noasig': $_SESSION['SMSfalse3'] = $sms3='<strong>No se logró asignar</strong> la información.'; break;
                  case 'noaddP': $_SESSION['SMSfalse3'] = $sms3='No se Compartió la Publicación.';break;
                  case 'noaddC': $_SESSION['SMSfalse3'] = $sms3='No se Agregó el Comentario.';break;
                  case 'nodropP': $_SESSION['SMSfalse3'] = $sms3='No se logró Eliminar la Publicación.';break;
                  case 'nodropC': $_SESSION['SMSfalse3'] = $sms3='No se logró Eliminar el Comentario.';break;
                  case 'noeditP': $_SESSION['SMSfalse3'] = $sms3='No se logró Editar la Publicación.';break;
                  case 'noeditC': $_SESSION['SMSfalse3'] = $sms3='No se logró Editar el Comentario.';break;
                  case 'null': $_SESSION['SMSnull3'] = $sms3='<strong>Se ingresarón campos vacios.</strong> Intentelo nuevamente.'; break;
                  default: $sms='<div class="alert alert-info" role="alert">'.$_SESSION['stat3'].' </div>'; break;
            }
      }

      if (isset($_SESSION['Mysqli_Error'])) { $Mysqli_Error=$_SESSION['Mysqli_Error']; }else{ $Mysqli_Error=''; }

      $er="";$eru="";$erp="";
      if (isset($_SESSION['error'])) {
            switch ($_SESSION['error']) {
                  case 2: $erp='Error: Su contraseña es Incorrecta'; break;
                  case 3: $er='Error: Su Usuario está suspendido.'; break;
                  case 4: $eru='Error: No se encontró el Usuario.'; break;
                  case 5: $er='Error: No se ejecutó la Consulta. '.$Mysqli_Error; break;
                  case 6: $er='Error: Se ingresaron caracteres no permitidos.'; break;
                  case 7: $er='Error: Su usuario no tiene permisos para acceder al sistema.'; break;
            } 
      }
      $edit=null;
      if (isset($_SESSION['editado'])) {
            $edit='Su informaión fue editada con éxito.<br>Por Favor vuelve a ingresar al sistema.';
            unset($_SESSION['editado']);
      }