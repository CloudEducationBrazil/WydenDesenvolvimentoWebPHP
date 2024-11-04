create database clinica;

USE clinica;

CREATE TABLE department(
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]

INSERT INTO department(name) VALUES ('RH');
INSERT INTO department(name) VALUES ('TI');
INSERT INTO department(name) VALUES ('Comercial');
INSERT INTO department(name) VALUES ('Desenvolvimento');
INSERT INTO department(name) VALUES ('Financeiro');