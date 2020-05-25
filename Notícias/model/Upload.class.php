<?php 
	class Upload {
		private $archive;
		private $name;
		private $extension;
		private $extAllowed = ["jpeg", "jpg", "png", "bmp", "gif"];
		private $path = "../image/";

		public function __construct($archive) {
			$this->archive = $archive;
			$this->extension = $this->getExtension();
			$this->name = $this->setNewName();
			
		}

		private function getExtension() {
			$extension = explode("/", $this->archive['type']);
			$extension = strtolower(end($extension));

			return $extension;
		}

		private function isValidImage() {
			// ? se verdadeiro retorna true // : se for false retorna falso
			return in_array($this->extension, $this->extAllowed) ? true : false;
		}

		private function setNewName() {
			$newName = sha1(uniqid(time())) . "." . $this->extension;

			return $newName;
		}

		public function save() {
			if (!$this->isValidImage()) {  
				return "A imagem não possui uma extensão válida!";
			}

			$path = $this->path;

			if (!file_exists($path)) {
				mkdir($path, 0777, true);    
				chmod($path, 0777);// chmod /comando do linux e mac para niveis de acesso
			}
			
			move_uploaded_file($this->archive['tmp_name'], $path . $this->name);

			return true;
		}

		public function getName() {
			return $this->name;
		}

	}