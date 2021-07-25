<?php
	class Usuario{
		private $nome;
		private $usuario;
		private $email;
		private $senha;
		
		function __construct($nome, $usuario, $email, $senha){
			$this->nome = $nome;
			$this->usuario = $usuario;
			$this->email = $email;
			$this->senha = $senha;
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}

		public function setUsuario($valor){
			$this->usuario = $valor;
		}
		public function setEmail($valor){
			$this->email = $valor;
		}
		public function setSenha($valor){
			$this->senha = $valor;
		}
		public function setNome($valor){
			$this->nome = $valor;
		}
		
	}
?>