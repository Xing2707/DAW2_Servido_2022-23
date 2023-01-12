DROP TABLE hacecomentario CASCADE;
DROP TABLE creaforo CASCADE;
DROP TABLE usuario CASCADE;


CREATE TABLE usuario(
  userid MEDIUMINT NOT NULL AUTO_INCREMENT,
  username       varchar(255) NOT NULL UNIQUE,
  pass        varchar(255) NOT NULL ,
  PRIMARY KEY (userid)
)ENGINE = InnoDB;

CREATE TABLE creaforo(
    foroid MEDIUMINT NOT NULL AUTO_INCREMENT,
    titulo varchar(30) NOT NULL,
    direccion varchar(350) NOT NULL,
    userid MEDIUMINT NOT NULL,
    CONSTRAINT `FK_US` FOREIGN KEY (userid) REFERENCES usuario (userid),
    PRIMARY KEY(foroid)
)ENGINE = InnoDB;

CREATE TABLE hacecomentario(
    idcomentario MEDIUMINT NOT NULL AUTO_INCREMENT,
    direccion varchar(350) NOT NULL,
    PRIMARY KEY (idcomentario)
)ENGINE = InnoDB;


INSERT INTO usuario (username,pass) VALUES(
    'admin','$2y$10$M3t0g8nuigRWem1wGieU8OexXt.XPOXGFBxWBBLGefqE19D7IqVnW'
);
INSERT INTO creaforo(titulo,direccion,userid) VALUES(
    'bien_Venido','../item/bienVenido.php',1
);
