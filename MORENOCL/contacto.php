<?php
	/**
	 * 
	 */
	class contacto extends database
	{
		private $table ='contacto';
		private $tid ="id_pers";
		//-------------------------------------------
		function cant($c1,$rid){
			$data = new stdClass();
			if ($rid == 1 || $rid == 2) {
				$sql = "SELECT ".$this->tid." FROM ".$this->table." WHERE status<>2 ;";
			}else{
				$sql = "SELECT ".$this->tid." FROM ".$this->table." WHERE status=1 ;";
			}
			$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			if ($res) {
				if ($res->num_rows > 0) {
					$data->result = 1;
					$data->cant = $res->num_rows;
					$data->mensaje = 'Registros encontrados con exito.';
					mysqli_free_result($res);
				}else{
					$data->result = 2;
					$data->cant = 0;
					$data->mensaje = 'Registros no encontrados con exito.';
				}
			}else{
				$data->result = 3;
				$data->cant = 0;
				$data->mensaje = 'No se ejecutó la consulta. Error: '.$_SESSION['Mysqli_Error'];
			}
			//---------------------
			mysqli_close($c1);
			return $data;
		}
		function buscar($c1,$ip,$token,$f){
			$data = new stdClass();
			$sql = "SELECT ".$this->tid." FROM ".$this->table." WHERE dir_ip LIKE '".$ip."' OR token LIKE '".$token."' AND (created_at >= '".$f." 00:00:00' OR created_at <= '".$f." 23:59:59') AND status=1 ;";
			$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			if ($res) {
				if ($res->num_rows > 0) {
					$data->result = 1;
					$data->cant = $res->num_rows;
					$data->mensaje = 'Registros encontrados con exito.';
					mysqli_free_result($res);
				}else{
					$data->result = 2;
					$data->cant = 0;
					$data->mensaje = 'Registros no encontrados con exito.';
				}
			}else{
				$data->result = 3;
				$data->cant = 0;
				$data->mensaje = 'No se ejecutó la consulta. Error: '.$_SESSION['Mysqli_Error'];
			}
			//---------------------
			mysqli_close($c1);
			return $data;
		}
		function listar($c1,$rid){
			$inf = null;$n = 1;$cant = 9;
			$inf.='<thead>';
				$inf.='<tr>';
					$inf.='<th><i class="bx bx-list-ol"></i></th>';
					$inf.='<th><i class="bx bx-cog"></i></th>';
					$inf.='<th>Nombres</th>';
					$inf.='<th>Correo</th>';
					$inf.='<th>Teléfono</th>';
					$inf.='<th>IP Cliente</th>';
					$inf.='<th>Mensaje</th>';
					$inf.='<th>Fecha</th>';
					$inf.='<th>Estado</th>';
				$inf.='</tr>';
			$inf.='</thead>';
			$inf.='<tbody>';
				if ($rid == 1 || $rid == 2) {
					$sql = "SELECT * FROM ".$this->table." WHERE status<>2 ORDER BY ".$this->tid." DESC ;";
				}else{
					$sql = "SELECT * FROM ".$this->table." WHERE status=1 ORDER BY ".$this->tid." DESC ;";
				}
				$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$pid = $row[$this->tid];
							$datos2 = base64_encode($pid).'||'.$row['full_name'];

							$inf.='<tr>';
								$inf.='<td>'.$n.'</td>';
								$inf.='<td>';
									$inf.='<a href="'.$this->detail.base64_encode($pid).'" class="btn btn-outline-warning"><i class="bx bx-edit"></i></a> ';
                                    if ($rid==1 || $rid==2) {
                                        $inf .= " <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#eliminar' onclick='eliminar(".'"'.$datos2.'"'.");' >";
                                            $inf .= "<i class='bx bx-trash' ></i>";
                                        $inf .= "</button>";
                                    }
								$inf.='</td>';
								$inf.='<td>'.$row['full_name'].'</td>';
								$inf.='<td><a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>';
								$inf.='<td><a href="tel:'.$row['telefono'].'">'.$row['telefono'].'</a></td>';
								$inf.='<td>'.$row['dir_ip'].'</td>';
								$inf.='<td>'.$row['mensaje'].'</td>';
								$inf.='<td>'.$row['created_at'].'</td>';
								$inf.='<td>';
                                    switch ($row['status']) {
                                        case 1:
                                            $inf.='<a class="btn btn-outline-success" href="'.ACTI.$this->actio.base64_encode($pid).'&meth=des"><i class="fas fa-check"></i></a>';
                                        break;
                                        case 2:
                                            $inf.='<a class="btn btn-outline-danger" href="'.ACTI.$this->actio.base64_encode($pid).'&meth=act"><i class="fas fa-ban"></i></a>';
                                        break;
                                        default:
                                            $inf.='<a class="btn btn-outline-warning" href="'.ACTI.$this->actio.base64_encode($pid).'&meth=act"><i class="fas fa-cross"></i></a>';
                                        break;
                                    }
								$inf.='</td>';
							$inf.='</tr>';

							$n++;
						}
					}else{
						$inf .= '<tr><td colspan="'.$cant.'">No se encontraron registros</td></tr>';
					}
				}else{
					$inf .= '<tr><td colspan="'.$cant.'">No se ejecutó la consulta: Error: '.$_SESSION['Mysqli_Error'].'</td></tr>';
				}
			$inf.='</tbody>';
			//---------------------
			mysqli_close($c1);
			return $inf;
		}
		function add($c1,$full_name,$email,$telefono,$ip,$token,$mensaje,$fecha){
			$data = new stdClass();
			function validarAdd($full_name,$email,$telefono,$ip,$token){
				$er = 1;
				if(is_null($full_name)){ $er=0; }
				if(is_null($email)){ $er=0; }
				if(is_null($telefono)){ $er=0; }
				if(is_null($ip)){ $er=0; }
				if(is_null($token)){ $er=0; }
				return $er;
			}
			if (validarAdd($full_name,$email,$telefono,$ip,$token) == 1) {
				$sql = "INSERT INTO ".$this->table." (full_name, email, telefono, dir_ip, token, mensaje, created_at) VALUES ('".$full_name."', '".$email."', '".$telefono."', '".$ip."', '".$token."', '".$mensaje."', '".$fecha."') ;";
				$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$data->result = 1;
					$data->inf = "add";
					$data->mensaje = 'Registro guardado con exito.';
				}else{
					$data->result = 2;
					$data->inf = "noadd";
					$data->mensaje = 'No se ejecutó la consulta. Error: '.$_SESSION['Mysqli_Error'];
				}
			}else{
				$data->result = 3;
				$data->inf = "null";
				$data->mensaje = 'El campo nombre está vacío. O el largo es menor que 3 carácteres.';
			}
			//--------------------
			mysqli_close($c1);
			return $data;
		}
		function drop($c1,$pid,$fecha,$uid){
			$data = new stdClass();
			function validarDrop($pid){
				$er = 1;
				if($pid <= 0){ $er=0; }
				return $er;
			}
			if (validarDrop($pid) == 1) {
				$sql = "UPDATE ".$this->table." SET drop_at='".$fecha."', id_drop=".$uid.", status=2 WHERE ".$this->tid."=".$pid." ;";
				$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$data->result = 1;
					$data->inf = "drop";
					$data->mensaje = 'Registro Eliminado con exito.';
				}else{
					$data->result = 2;
					$data->inf = "nodrop";
					$data->mensaje = 'No se ejecutó la consulta. Error: '.$_SESSION['Mysqli_Error'];
				}
			}else{
				$data->result = 3;
				$data->inf = "null";
				$data->mensaje = 'El campo id_tipo es Incorrecto o está vacío.';
			}
			//--------------------
			mysqli_close($c1);
			return $data;
		}
		function acti($c1,$pid,$fecha,$uid){
			$data = new stdClass();
			function validarActi($pid){
				$er = 1;
				if($pid <= 0){ $er=0; }
				return $er;
			}
			if (validarActi($pid) == 1) {
				$sql = "UPDATE ".$this->table." SET updated_at='".$fecha."', id_updated=".$uid.", status=1 WHERE ".$this->tid."=".$pid." ;";
				$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$data->result = 1;
					$data->inf = "active";
					$data->mensaje = 'Registro Eliminado con exito.';
				}else{
					$data->result = 2;
					$data->inf = "noactive";
					$data->mensaje = 'No se ejecutó la consulta. Error: '.$_SESSION['Mysqli_Error'];
				}
			}else{
				$data->result = 3;
				$data->inf = "null";
				$data->mensaje = 'El campo id_tipo es Incorrecto o está vacío.';
			}
			//--------------------
			mysqli_close($c1);
			return $data;
		}
		function desact($c1,$pid,$fecha,$uid){
			$data = new stdClass();
			function validarDesact($pid){
				$er = 1;
				if($pid <= 0){ $er=0; }
				return $er;
			}
			if (validarDesact($pid) == 1) {
				$sql = "UPDATE ".$this->table." SET updated_at='".$fecha."', id_updated=".$uid.", status=0 WHERE ".$this->tid."=".$pid." ;";
				$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
				if ($res) {
					$data->result = 1;
					$data->inf = "desactive";
					$data->mensaje = 'Registro Eliminado con exito.';
				}else{
					$data->result = 2;
					$data->inf = "nodesactive";
					$data->mensaje = 'No se ejecutó la consulta. Error: '.$_SESSION['Mysqli_Error'];
				}
			}else{
				$data->result = 3;
				$data->inf = "null";
				$data->mensaje = 'El campo id_tipo es Incorrecto o está vacío.';
			}
			//--------------------
			mysqli_close($c1);
			return $data;
		}
	}