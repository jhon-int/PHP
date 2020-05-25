<?php
    class Noticia {
        private $id;
        private $titulo;
        private $descResu;
        private $descCompl;
        private $categoria;
        private $image_index;
        private $image_post;

        public function __construct($id = null, $titulo = null, $descResu = null, $descCompl = null, $categoria = null, $image_index = null, $image_post = null) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descResu = $descResu;
            $this->descCompl = $descCompl;
            $this->categoria = $categoria;
            $this->image_index = $image_index;
            $this->image_post = $image_post;
        }

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
            return $this;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
            return $this;
        }

        public function getDescResu() {
            return $this->descResu;
        }

        public function setDescResu($descResu) {
            $this->descResu = $descResu;
            return $this;
        }

        public function getDescCompl() {
            return $this->descCompl;
        }

        public function setDescCompl($descCompl) {
            $this->descCompl = $descCompl;
            return $this;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
            return $this;
        }

        public function getImageIndex() {
            return $this->image_index;
        }

        public function setImageIndex($image_index) {
            $this->image_index = $image_index;
            return $this;
        }

        public function getImagePost() {
            return $this->image_post;
        }
        
        public function setImagePost($image_post) {
            $this->image_post = $image_post;
            return $this;
        }
    }
?>