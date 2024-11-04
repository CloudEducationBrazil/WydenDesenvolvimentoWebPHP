create database clinica;

use clinica; 

start transaction;

# SQL SERVER

CREATE TABLE department (
    id INT IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(255) NOT NULL
);

INSERT INTO department(name) VALUES ('RH');
INSERT INTO department(name) VALUES ('TI');
INSERT INTO department(name) VALUES ('Comercial');
INSERT INTO department(name) VALUES ('Desenvolvimento');
INSERT INTO department(name) VALUES ('Financeiro');

commit;
# rollback;