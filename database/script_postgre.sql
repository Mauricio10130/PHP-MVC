CREATE TABLE Estudiante(
	id serial,
	nombre varchar(30) not null,
	apellidos varchar(50),
	correo varchar(100) not null,
	edad int,
	genero varchar(3),
	CONSTRAINT pk_estudiante PRIMARY KEY(id)
)

CREATE TABLE Carrera(
	id serial,
	nombre varchar(50) not null,
	descripcion varchar(500),
	CONSTRAINT pk_carrera PRIMARY KEY(id)
)

CREATE TABLE Materia(
	id serial,
	nombre varchar(50) not null,
	sigla varchar(10),
	CONSTRAINT pk_materia PRIMARY KEY(id)
);

CREATE TABLE Materia_Carrera(
    id serial,
	materia_id int,
	carrera_id int,
	PRIMARY KEY(id,materia_id),
	CONSTRAINT fk_materia FOREIGN KEY(materia_id) REFERENCES Materia(id),
	CONSTRAINT fk_carrera FOREIGN KEY(carrera_id) REFERENCES Carrera(id)
);

CREATE TABLE Apunte(
	id serial,
	titulo varchar(50) not null,
	detalle varchar(3000) not null,
	bibliografia varchar(500) not null,
	estudiante_id int not null,
	materia_id int not null,
	CONSTRAINT pk_apunte PRIMARY KEY(id),
	CONSTRAINT fk_estudiante FOREIGN KEY(estudiante_id) REFERENCES Estudiante(id),
	CONSTRAINT fk_materia2 FOREIGN KEY(materia_id) REFERENCES Materia(id)
);