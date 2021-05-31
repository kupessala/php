<?php
/**
 *
 */
 /*ini_set('display_errors',1);
 ini_set('display_startup_errors',1);
 error_reporting(E_ALL);*/
class Forms // extends Conexao
{
	function getCombox($field='',$nRem='',$dao='')
	{
		$var=$field;
		//$fildeName=substr($var,2);

		$fildeName=strtolower(substr($var,$nRem)).'Nome';
	$Tabela=strtolower(substr($var,$nRem).'s');

		$comboxResult="<select class='' name='$field'>";
		$field=$field;
		$combox =$dao->select("SELECT {$field},{$fildeName} FROM $Tabela");
		/* array(['Acesso'=>"Administrador","idAcesso"=>1]	,
			['Acesso'=>"Operador","idAcesso"=>2]
		);*/
		//interador foreach ($variable as $key => $value)
//	var_dump($combox)."<br>";

	echo "$Tabela | $field | $fildeName <br>";
			foreach ($combox as $comb) {

			$id=$comb[$field];
			$nome=$comb[$fildeName];

		$comboxResult.="<option value='$id'>$nome</option>";
			}

		$comboxResult.="</select>";

					return $comboxResult;
	}

	function getFields($dados='',$i='',$dao='')
	{
		$dadosResult='';
		for($x=0;$x<=$i;$x++):
			$field=$dados{$x}{0};
	$type=$dados[$x]{1};
	$key=$dados{$x}{3};
		if($field==''):
	elseif($type=='datetime'):
	elseif($type=='timestamp'):
	elseif($key=='MUL'):
	//echo count($field);

	$dadosResult.=$this->getCombox($field,2,$dao);

			elseif($field=='usuarioSenha'):
				$type="password";
				$dadosResult.="<input type='$type' class='' name='$field' value='$field'>";
		else:
			$dadosResult.="<input type='$type' name='$field' value='$field'>";
		endif;
		endfor;
	return $dadosResult;
	}


public function frmBegin($value='')
{
	$frmBegin=" <form class='' action='index.php' method='post'>";
return $frmBegin;
}
public function buttom($value='')
{$buttom=" <button type='submit' name='btnGet'>Cadastrar</button>";
	return $buttom;
}
public function frmEnd($value='')
{$frmEnd="</form>";
return $frmEnd ;
}
}


 ?>
