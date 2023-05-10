USE bitadb;

CREATE TABLE libros (
    id INT(11) NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(50) NOT NULL,
    autor VARCHAR(50) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    sinopsis text NOT NULL,
    link text NOT NULL,
    linkImagen text not null,
    PRIMARY KEY (id)
);
