<?php
	class Contato {
		private $id;
		private $nome;
		private $email;
		private $telefone;
		private $celular;
		private $endereco;
		private $numero;
		private $bairro;
		private $cidade;
		private $uf;
		private $cep;
		private $observacoes;

		function __construct($id=null, $nome, $email, $tel, $cel, $end, $num, $bai, $cid, $uf, $cep, $obs) {
			$this->id = $id;
			$this->nome = $nome;
			$this->email = $email;
			$this->telefone = $tel;
			$this->celular = $cel;
			$this->endereco = $end;
			$this->numero = $num;
			$this->bairro = $bai;
			$this->cidade = $cid;
			$this->uf = $uf;
			$this->cep = $cep;
			$this->observacoes = $obs;
		}

		/*
		 * Métodos GET
		 */
		public function getID() {
			return $this->id;
		}

		public function getNome() {
			return $this->nome;
		}

		public function getEmail() {
			return $this->email;
		}

		public function getTelefone() {
			return $this->telefone;
		}

		public function getCelular() {
			return $this->celular;
		}

		public function getEndereco() {
			return $this->endereco;
		}

		public function getNumero() {
			return $this->numero;
		}

		public function getBairro() {
			return $this->bairro;
		}

		public function getCidade() {
			return $this->cidade;
		}

		public function getUnidFed() {
			return $this->uf;
		}

		public function getCEP() {
			return $this->cep;
		}

		public function getObservacoes() {
			return $this->observacoes;
		}

		/*
		 * Métodos SET
		 */
		public function setID($id) {
			$this->id = $id;
		}

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function setEmail($email) {
			$this->email = $email;
		}

		public function setTelefone($tel) {
			$this->telefone = $tel;
		}

		public function setCelular($cel) {
			$this->celular = $cel;
		}

		public function setEndereco($end) {
			$this->endereco = $end;
		}

		public function setNumero($num) {
			$this->numero = $num;
		}

		public function setBairro($bai) {
			$this->bairro = $bai;
		}

		public function setCidade($cid) {
			$this->cidade = $cid;
		}

		public function setUnidFed($uf) {
			$this->uf = $uf;
		}

		public function setCEP($cep) {
			$this->cep = $cep;
		}

		public function setObservacoes($obs) {
			$this->observacoes = $obs;
		}
	}