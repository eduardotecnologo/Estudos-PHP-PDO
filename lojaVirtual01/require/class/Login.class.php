<?php
class Login
{
	private $vem,$vsh,$cpt,$crud,$email,$senha,$log,$dds;
	public function setLogin($email,$senha)
	{
		$this->vem=  new ValidaEmail;
		$this->vsh=  new ValidaSenha;
		$this->cpt=  new Cripto;
		$this->crud= new Crud;

		$this->email=$this->vem->setValidaEmail($email);
		$this->senha=$this->vsh->setValidaSenha($senha);			

		$this->log=$this->senha==$senha?
		$this->crud->select(' idUsuario ',' usuarios ',' WHERE email=? && senha=?',
			array($this->email,$this->cpt->setCripto($this->senha))):
		FALSE;


		if($this->email<>$email)
		{
			return $this->email;
		}else
		if($this->senha<>$senha)
		{
			return $this->senha;
		}else

		{	
			if($this->log && $this->log->rowCount()>0)
			{
				foreach($this->log as $this->dds)
				// require_once"../_includes/index.php";

					{$_SESSION['logado']=$this->dds;}
				//return session_destroy()
				//header("location:../_includes/index.php");
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=/../_includes/index.php'>";	

			}else
			{return 'Acesso negado.';}		

		}

	}
}