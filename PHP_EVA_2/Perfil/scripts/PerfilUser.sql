DROP TABLE token CASCADE;
DROP TABLE PerfilUsuario CASCADE;


CREATE TABLE PerfilUsuario (
    userid MEDIUMINT AUTO_INCREMENT PRIMARY KEY,
    username varchar(255) NOT NULL UNIQUE,
    passwd varchar(255) NOT NULL,
    img varchar(255),
    correo varchar(255) NOT NULL UNIQUE,
    descripcion TEXT
)ENGINE = InnoDB;

CREATE TABLE token(
    tokenid MEDIUMINT AUTO_INCREMENT PRIMARY KEY,
    valor varchar(255) NOT NULL,
    expiracion datetime NOT NULL DEFAULT (NOW() + INTERVAL 7 DAY),
    userid MEDIUMINT NOT NULL,
    CONSTRAINT `FK_TK` FOREIGN KEY (userid) REFERENCES PerfilUsuario(userid)
)ENGINE = InnoDB;


------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------REM INSERTS ------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO PerfilUsuario(username,passwd,img,correo,descripcion) VALUES(
    'admin','$2y$10$M3t0g8nuigRWem1wGieU8OexXt.XPOXGFBxWBBLGefqE19D7IqVnW','./upload/admin.png','admin@gmail.com','SOY admin de esta pagina web'
    );

------------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------
