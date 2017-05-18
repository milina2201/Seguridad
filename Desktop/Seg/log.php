<?php
	

		echo "<form method='get' action='curp.php'>
			Nombre:<input name='nom' type='text'><br/>	
			Apellido Paterno:<input name='ap' type='text'><br/>
			Apellido Materno:<input name='am' type'text'><br/>
			Fecha de Nacimineto:<input name='fec' type='date'><br/>
			Lugar de Nacimiento:<select name='clav'><br/>";
		$cla=array("AGUASCALIENTES"=>"AS","BAJA CALIFORNIA"=>"BC","BAJA CALIFORNIA SUR"=>"BS","CAMPECHE"=>"CC","CHIAPAS"=>"CS","CHIHUAHUA"=>"CH","COAHUILA"=>"CL","COLIMA"=>"CM","DISTRITO FEDERAL"=>"DF","DURANGO"=>"DG","GUANAJUATO"=>"GT","GUERRERO"=>"GR","HIDALGO"=>"HG","JALISCO"=>"JC","EDO.MEX"=>"MC",
		"MICHOACAN"=>"MN","MORELOS"=>"MS","NAYARIT"=>"NT","NUEVO LEON"=>"NL","OAXACA"=>"OC","PUEBLA"=>"PL","QUERETARO"=>"QT","QUINTANA ROO"=>"QR","SAN LUIS POTOSI"=>"SP","SINALOA"=>"SL","SONORA"=>"SR","TABASCO"=>"TC","TLAXCALA"=>"TL","TAMAULIPAS"=>"TS","VERACRUZ"=>"VZ",
		"YUCATAN"=>"YN","ZACATECAS"=>"ZS");
			foreach($cla as $ed => $clav)
				echo"<option value=".$clav.">".$ed."</option>";
			echo"</select></br>
				Sexo:<select name='sex'><br/>
					<option value='M'>Femenino</option>
					<option value='H'>Masculino</option>
				</select><br/>
			Numero de Tarjeta Visa:<input name='tar' type='text' pattern='^[0-9]{16}$' placeholder='16 digitos'/><br/>
			<input type='submit'>";
			
?>