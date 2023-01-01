DROP TABLE usuario CASCADE;
CREATE TABLE usuario(
  userid MEDIUMINT NOT NULL AUTO_INCREMENT,
  usename       varchar(255) NOT NULL ,
  pass        varchar(255) NOT NULL ,
  PRIMARY KEY (userid)
)ENGINE = InnoDB;

DROP TABLE creaforo CASCADE;
CREATE TABLE creaforo(
    foroid MEDIUMINT NOT NULL AUTO_INCREMENT,
    titulo varchar(30) NOT NULL,
    direccion varchar(350) NOT NULL,
    userid MEDIUMINT UNSIGNED NOT NULL,
    CONSTRAINT `FK_US` FOREIGN KEY (foroid) REFERENCES usuario (userid) ON DELETE CASCADE ON UPDATE RESTRICT,
    PRIMARY KEY(foroid)
)ENGINE = InnoDB;


INSERT INTO usuario (usename,pass) VALUES(
    'admin','$2y$10$M3t0g8nuigRWem1wGieU8OexXt.XPOXGFBxWBBLGefqE19D7IqVnW'
);
INSERT INTO creaforo(titulo,userid) VALUES(
    ',/bienVenido.php',LAST_INSERT_ID()
);

commit;