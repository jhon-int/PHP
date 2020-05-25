<?php 
	require_once "Upload.class.php";

	class NoticiaDAO extends Conexao {
		
		public function __construct() {
			parent::__construct();
		}

		//public function InserirRest
		public function Inserir($not) {

			$titulo = $not->getTitulo();	
			$resumo = $not->getDescResu();	
			$completo = $not->getDescCompl();
			$categoria = $not->getCategoria();
			$img_index = $not->getImageIndex();
			$img_post = $not->getImagePost();

			$upload_index = new Upload($img_index);
			$upload_post = new Upload($img_post);

			$upload_index->save();
			$upload_post->save();

		
			return $this->table('noticias')->fields(['descricao_titulo',  'descricao_resumida', 'descricao_completa', 'id_noticia_tipo', 'imagem_index', 'imagem_post'])->insert([$titulo, $resumo, $completo, $categoria, $upload_index->getName(), $upload_post->getName()]);
		}

		//TRAS TODAS AS NOTICIAS
		public function allNews() {
			$ret = $this->table('noticias')->fields(['*'])->join('noticias_tipos', 'noticias.id_noticia_tipo = noticias_tipos.id_noticia_tipo')->order('noticias.id_noticia DESC')->select();
			return $ret;
		}

		// SEPARA POR CURSO
		public function oneCourse($not) {
			$ret = $this->table('noticias')->fields(['*'])->where('id_noticia_tipo = ?')->order('id_noticia DESC')->select([$not->getId()]);
			return $ret;
		}

		// SEPERA O POST DE CADA NOTICIA //EDITAR A NOTICIA
		public function post($not) {
			$ret = $this->table('noticias')->fields(['*'])->where('id_noticia = ?')->order('id_noticia DESC')->select([$not->getId()]);
			return $ret;
		}

		public function edit($not) {

			$titulo = $not->getTitulo();	
			$resumo = $not->getDescResu();	
			$completo = $not->getDescCompl();
			$categoria = $not->getCategoria();
			$img_index = $not->getImageIndex();
			$img_post = $not->getImagePost();

			$upload_index = new Upload($img_index);
			$upload_post = new Upload($img_post);

			$upload_index->save();
			$upload_post->save();

			return $this->table('noticias')
						->fields(['descricao_titulo',  'descricao_resumida', 'descricao_completa', 'id_noticia_tipo', 'imagem_index', 'imagem_post'])
						->where('id_noticia = ?')
						->update([$titulo, $resumo, $completo, $categoria, $upload_index->getName(), $upload_post->getName(), $not->getId()]);

		}

		public function destroy($not) {
			$ret = $this->table('noticias')
			->where('id_noticia = ?')
			->delete([$not->getId()]);

			return $ret;
		}
	}
?>