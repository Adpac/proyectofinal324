<?php
	function consultar($campo,$tabla,$where){
		$sql=mysql_query("SELECT * FROM $tabla WHERE $where");
		if($row=mysql_fetch_array($sql)){
			return $row[$campo];
		}else{
			return '';	
		}
	}
	function estado($estado){
		if($estado=='si'){
			return '<span class="label label-success">Activo</span>';
		}else{
			return '<span class="label label-important">No Activo</span>';
		}
	}

	function fecha_formato ($fecha){
     $dia=SUBSTR($fecha, 8,2);
	 $mes=SUBSTR($fecha, 5,2);
	 $anio=SUBSTR($fecha, 0,4);
	 if( $mes = 01){$mest='Enero';}
	 if( $mes = 02){$mest='Febrero';}
	 if( $mes = 03){$mest='Marzo';}
	 if( $mes = 04){$mest='Abril';}
	 if( $mes = 05){$mest='Mayo';}
	 if( $mes = 06){$mest='Junio';}
	 if( $mes = 07){$mest='Julio';}
	 if( $mes = 08){$mest='Agosto';}
	 if( $mes = 09){$mest='Septiembre';}
	 if( $mes = 10){$mest='Octubre';}
	 if( $mes = 11){$mest='Noviembre';}
	 if( $mes = 12){$mest='Diciembre';}
	// return $fecha;
	 return $dia." de ".$mest." de ".$anio;
	}

	function sumanotas ($ser,$saber,$hacer,$decidir){
		$n=$ser+$saber+$hacer+$decidir;
		return $n;
	}

	function decimal($n){
		$a=substr($n, 3,1);
		$b=substr($n, 0,2);
		if($a >= 5){
			$b=$b+1;
			return $b;
		}
		else{return $b;}

	}

	function nompropio($n){
		$b=substr($n, 0,1);
		$b1=substr($n, 1);
		$c=strtoupper($b);
		$d=$c.$b1;
		return $d;
	}
?>