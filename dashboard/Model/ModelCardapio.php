<?php 

    class ModelCardapio {

        private $id;
        private $principal;
        private $guarnicao;
        private $acompanhamento;
        private $salada;
        private $bebida;
        private $sobremesa;
        private $tipo;
        private $data;
        
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getData() {
            return $this->data;
        }

        public function setData($data) {
            $this->data = $data;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getPrincipal() {
            return $this->principal;
        }

         public function setPrincipal($principal) {
            $this->principal = $principal;
        }

        public function getGuarnicao() {
            return $this->guarnicao;
        }

         public function setGuarnicao($guarnicao) {
            $this->guarnicao = $guarnicao;
        }

        public function getAcompanhamento() {
            return $this->acompanhamento;
        }

         public function setAcompanhamento($acompanhamento) {
            $this->acompanhamento = $acompanhamento;
        }

        public function getSalada() {
            return $this->salada;
        }

         public function setSalada($salada) {
            $this->salada = $salada;
        }

         public function getBebida() {
            return $this->bebida;
        }

         public function setBebida($bebida) {
            $this->bebida = $bebida;
        }

        public function getSobremesa() {
            return $this->sobremesa;
        }

         public function setSobremesa($sobremesa) {
            $this->sobremesa = $sobremesa;
        }

    }
