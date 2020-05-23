CREATE TABLE empresa (
  idempresa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cnpj VARCHAR(18) NULL,
  nome VARCHAR(100) NULL,
  nomeFantasia VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  atividadePrincipal TEXT NULL,
  municipio VARCHAR(100) NULL,
  uf VARCHAR(2) NULL,
  dataAbertura DATE NULL,
  naturezaJuridica VARCHAR(100) NULL,
  capitalSocial DOUBLE NULL,
  situacao VARCHAR(50) NULL,
  PRIMARY KEY(idempresa)
);


