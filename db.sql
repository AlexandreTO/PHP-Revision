CREATE TABLE Animal(
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255),
    description text,
    status bool,
);

INSERT INTO Animal(nom, description, status) VALUES ("Chien", "test", 1);
INSERT INTO Animal(nom, description, status) VALUES ("Chat", "Animal Chat", 1);
INSERT INTO Animal(nom, description, status) VALUES ("Oiseaux", "Animal Oiseaux", 0);
INSERT INTO Animal(nom, description, status) VALUES ("Singe", "Singe", 1);
INSERT INTO Animal(nom, description, status) VALUES ("Reptile", "Reptile", 1);
INSERT INTO Animal(nom, description, status) VALUES ("Lion", "Lion", 1);
INSERT INTO Animal(nom, description, status) VALUES ("Tigre", "Tigre", 0);
INSERT INTO Animal(nom, description, status) VALUES ("Serpent", "Serpent", 0);
