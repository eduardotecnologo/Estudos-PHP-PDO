<?php
class ValidaSenha{
	public function setValidaSenha($pass){
		if(strlen($pass)<1)
			return 'Informe a Senha';
		else
			if(!preg_match('/ˆ[0-9a-z]{8,12}$/i',$pass))
				return 'Senha Inválida';
			else
				return $pass;
		}
	}