<?php 
    class links {
        
        private $id;
        private $descricao;
        private $link;

        public function __construct($id="", $descricao="", $link="") {
            $this->id = $id;
            $this->descricao = $descricao;
            $this->link = $link;
        }
    
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;

            return $this;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;

            return $this;
        }

        public function getLink() {
            return $this->link;
        }

        public function setLink($link) {
            $this->link = $link;

            return $this;
        }
    }
?>