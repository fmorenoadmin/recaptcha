<?php
	$ru0='../';
	$dbs='database';
	$cl1='contacto';
	$di1=$cl1.'/';
	//-------------------------------------------------------------------------------------
	function index($rut,$rid,$uid){
		global $dbs,$cl1;
		require_once($rut.DIRMOR.$dbs.'.php');
		require_once($rut.DIRMOR.$cl1.'.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();
		$data = new stdClass();
		//-------------------------------------------------------------------------------------
		$data->inf = $_cl1->listar($_dbs->conectar(),$rid);
		//-------------------------------------------------------------------------------------
		return $data;
	}
	//-------------------------------------------------------------------------------------
	if (isset($_POST['enviar'])){
		if (isset($_SESSION)) {}else{ session_start(); }
		require_once($ru0.'constant.php');
		$json = new stdClass();
		//-------------------------------------------------------------------------------------
		$ip = base64_decode(base64_decode(base64_decode(base64_decode($_POST['required']))));
		$token = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_POST['token'])))))));
		$url = base64_decode($_POST['url']);
		$f = date('Y-m-d');
		//-------------------------------------------------------------------------------------
		if ($_SESSION['sid'] == $token) {
			require_once($ru0.DIRMOR.$dbs.'.php');
			require_once($ru0.DIRMOR.$cl1.'.php');
			$_dbs = new $dbs();
			$_cl1 = new $cl1();
			$html = null;
			//-------------------------------------------------------------------------------------
			if ($_POST["g-recaptcha-response"] != "") {
				$obj = new stdClass();
				$obj->secret = SK_RCAPTCHA;
				$obj->response = $_POST["g-recaptcha-response"];
				$obj->remoteip = $_SERVER["REMOTE_ADDR"];
				$urlv = "https://www.google.com/recaptcha/api/siteverify";
				//---------------------------------------------------------
				$options = array(
					"http" => array(
						"header" => "Content-type: application/x-www-form-urlencoded\r\n",
						"method" => "POST",
						"content" => http_build_query($obj)
					)
				);
				//---------------------------------------------------------
				$context = stream_context_create($options);
				$result = json_decode(file_get_contents($urlv, false, $context));
				//---------------------------------------------------------
				/* FIN DE CAPTCHA */
				//---------------------------------------------------------
				if ($result->success == true) {
					////>>>>>>>>>>>>>>>>>>>>>>
					//-------------------------------------------------
						$busq = $_cl1->buscar($_dbs->conectar(),$ip,$token,$f);
						//-------------------------------------------------------------------------------------
						if ($busq->cant < 2) {
							$full_name = str_replace("'", '´', $_POST['full_name']);
							$email = $_POST['email'];
							$telefono = str_replace("'", '´', $_POST['telefono']);
							$mensaje = str_replace("'", '´', $_POST['mensaje']);
							$fecha = date('Y-m-d H:i:s');
							//-------------------------------------------------------------------------------------
							$resp = $_cl1->add($_dbs->conectar(),$full_name,$email,$telefono,$ip,$token,$mensaje,$fecha);
							//-------------------------------------------------------------------------------------
							if (isset($resp->result)) {
								switch ($resp->result) {
									case 1:
										$_SESSION['SMStrue'] = $resp->mensaje;
										//-----------------------------------------------------------------------------------------------
										$correo_dir = 'mail@dominio.com';
										//-----------------------------------------------------------------------------------------------
										$header = "From: ".$full_name." <".$email."> \r\n";
										//$header .= "Reply-To: NOMBRE <hola@dominio.com> \r\n";
										$header .= "X-Mailer: PHP/".phpversion()." \r\n";
										$header .= "Mime-Version: 2.0 \r\n";
										$header .= "Content-type: text/html; charset=UTF-8;";
										//-----------------------------------------------------------------------------------------------
										$asunto = 'Formulario de Contacto Web';
										//-----------------------------------------------------------------------------------------------
										$html = 'Saludos Cordiales,<br>';
											$html .= '<p>La presente es para hacerle llegar la información de una solicitud de Contacto. Enviada desde la página Web</p>';
											$html .= '<br>';
											$html .= '<h3>Esta es mi información de contacto:</h3>';
											$html .= '<br>';
											$html .= '<ul>';
												$html .= '<li>Nombres: <b>'.$full_name.'</b></li>';
												$html .= '<li>Correo: <b>'.$email.'</b></li>';
												$html .= '<li>Teléfono: <b>'.$telefono.'</b></li>';
												$html .= '<li>Mensaje: <p>'.$mensaje.'</p></li>';
											$html .= '</ul>';
											$html .= '<br>';
											$html .= '<h3>Datos de Seguridad:</h3>';
											$html .= '<br>';
											$html .= '<ul>';
												$html .= '<li>Fecha: <b>'.$fecha.'</b></li>';
												$html .= '<li>Dirección IP: <b>'.$ip.'</b></li>';
												$html .= '<li>Token de Seguridad: <b>'.$token.'</b></li>';
												$html .= '<li>Url: <p>'.$url.'</p></li>';
											$html .= '</ul>';
											$html .= '<br>';
										$html .= 'Espero su pronta respuesta.<br>';
										//-----------------------------------------------------------------------------------------------
										$res = mail($correo_dir, $asunto, $html, $header);
										//-----------------------------------------------------------------------------------------------
										if ($res) {
											$_SESSION['mensjEmail'] = 'send';
										}else{
											$_SESSION['mensjEmail'] = 'nosend';
										}
									break;
									default:
										$_SESSION['SMSfalse'] = $resp->mensaje;
									break;
								}
							}else{
								$_SESSION['SMSfalse'] = 'No se a retornado respuesta de la clase.';
							}
						}else{
							$_SESSION['SMSnull'] = 'Solo se pueden enviar 3 a 4 contactos por día desde la Misma computadora';
						}
					//-------------------------------------------------
					////<<<<<<<<<<<<<<<<<<<<<<
				}else{
					//header("Content-type: application/json; charset: utf8;");
					$json->code_error = 1;
					$_SESSION['SMSfalse'] = $json->error = "Lo sentimos el Captcha validado es invalido.";
					//error_log(json_encode($json));
					include_once($ru0."419.shtml");
					exit();
				}
			}else{
				//header("Content-type: application/json; charset: utf8;");
				$json->code_error = 2;
				$_SESSION['SMSfalse'] = $json->error = "Lo sentimos el Captcha recibido es incorrecto o esta vacío.";
				//error_log(json_encode($json));
				include_once($ru0."418.shtml");
				exit();
			}
			//-------------------------------------------------------------------------------------
			header("Location: ".URL.$di1);
			exit();
		}
	}