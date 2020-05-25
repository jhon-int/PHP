CREATE DATABASE fatec_news;

CREATE TABLE carr (
  id_carr INT NOT NULL AUTO_INCREMENT,
  descricao_titulo VARCHAR(80) DEFAULT NULL,
  descricao_carr VARCHAR(200) DEFAULT NULL,
  imagem_carr TEXT NOT NULL,
  PRIMARY KEY (id_carr)
);


CREATE TABLE noticias_tipos (
  id_noticia_tipo INT NOT NULL AUTO_INCREMENT,
  descricao VARCHAR(80) NOT NULL,
  PRIMARY KEY (id_noticia_tipo)
);

CREATE TABLE usuarios (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  login VARCHAR(40) NOT NULL,
  nome VARCHAR(80) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_usuario)
);


CREATE TABLE noticias (
  id_noticia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  /*data_hora DATETIME NOT NULL CURRENT_TIMESTAMP,*/
  descricao_titulo VARCHAR(80) NOT NULL,
  descricao_resumida TEXT NOT NULL,
  descricao_completa TEXT NOT NULL,
  imagem_index TEXT,
  imagem_post TEXT,
	
	id_noticia_tipo int not null,

  FOREIGN KEY (id_noticia_tipo) REFERENCES noticias_tipos (id_noticia_tipo)
);


INSERT INTO noticias_tipos(descricao)  
VALUES ("Novidades"), ("GPI"), ("GTI"), ("Meio Ambiente"), ("Logistica"), ("Sistemas para Internet"), ("Construção Naval"), ("Sistemas Navais"), ("Transporte"), ("Moradia");