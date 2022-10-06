CREATE DATABASE AlmacenamientoApuntes
USE AlmacenamientoApuntes

CREATE TABLE Estudiante(
	id int(255) auto_increment not null,
	nombre varchar(30) not null,
	apellidos varchar(50),
	correo varchar(100) not null,
	edad int,
	genero varchar(3),
	CONSTRAINT pk_estudiante PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE Carrera(
	id int(255) auto_increment not null,
	nombre varchar(50) not null,
	descripcion varchar(500),
	CONSTRAINT pk_carrera PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE Materia(
	id int(255) auto_increment not null,
	nombre varchar(50) not null,
	sigla varchar(10),
	CONSTRAINT pk_materia PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE Materia_Carrera(
	materia_id int(255) not null,
	carrera_id int(255) not null,
	PRIMARY KEY(materia_id,carrera_id),
	CONSTRAINT fk_materia FOREIGN KEY(materia_id) REFERENCES Materia(id),
	CONSTRAINT fk_carrera FOREIGN KEY(carrera_id) REFERENCES Carrera(id)
)ENGINE=InnoDb;

CREATE TABLE Apunte(
	id int(255) auto_increment not null,
	titulo varchar(50) not null,
	detalle varchar(3000) not null,
	bibliografia varchar(500) not null,
	estudiante_id int(255) not null,
	materia_id int(255) not null,
	CONSTRAINT pk_apunte PRIMARY KEY(id),
	CONSTRAINT fk_estudiante FOREIGN KEY(estudiante_id) REFERENCES Estudiante(id),
	CONSTRAINT fk_materia2 FOREIGN KEY(materia_id) REFERENCES Materia(id)
)ENGINE=InnoDb;
