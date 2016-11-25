CREATE DATABASE TotalFitnessGym;

USE TotalFitnessGym


CREATE TABLE Rutina (
                id_rutina INTEGER IDENTITY NOT NULL,
                horario VARCHAR(35) NOT NULL,
                CONSTRAINT id_rutina_pk PRIMARY KEY (id_rutina)
);


CREATE TABLE Mi_Rutina (
                id_mi_rutina INTEGER IDENTITY NOT NULL,
                cantidad_ejercicios INTEGER NOT NULL,
                repeticiones INTEGER NOT NULL,
                series INTEGER NOT NULL,
                lunes VARCHAR(15),
                martes VARCHAR(15),
                miercoles VARCHAR(15),
                jueves VARCHAR(15),
                viernes VARCHAR(15),
                sabado VARCHAR(15),
                id_rutina INTEGER NOT NULL,
                CONSTRAINT id_mi_rutina_pk PRIMARY KEY (id_mi_rutina)
);


CREATE TABLE Tipo_de_Pago (
                id_pago INTEGER IDENTITY NOT NULL,
                tipo_pago VARCHAR(30) NOT NULL,
                cantidad INTEGER NOT NULL,
                CONSTRAINT id_tipo_pago_pk PRIMARY KEY (id_pago)
);


CREATE TABLE Visita (
                id_visita INTEGER IDENTITY NOT NULL,
                pago INTEGER NOT NULL,
                CONSTRAINT id_visita_pk PRIMARY KEY (id_visita)
);


CREATE TABLE Socio (
                id_socio INTEGER IDENTITY NOT NULL,
                nombre VARCHAR(80) NOT NULL,
                edad INTEGER NOT NULL,
                fecha_inscripcion DATE NOT NULL,
                estatura VARCHAR(10) NOT NULL,
                peso VARCHAR(10) NOT NULL,
                huella VARCHAR(255) NOT NULL,
                CONSTRAINT id_socio_pk PRIMARY KEY (id_socio)
);


CREATE TABLE Registro (
                id_registro INTEGER IDENTITY NOT NULL,
                hora_llegada DATETIME NOT NULL,
                tiempo_aprox VARCHAR(20) NOT NULL,
                id_visita INTEGER,
                id_socio INTEGER,
                CONSTRAINT id_registro_pk PRIMARY KEY (id_registro)
);


CREATE TABLE Instructor (
                id_instructor INTEGER IDENTITY NOT NULL,
                nombre VARCHAR(80) NOT NULL,
                direccion VARCHAR(50) NOT NULL,
                telefono VARCHAR(15) NOT NULL,
                horario VARCHAR(20) NOT NULL,
                CONSTRAINT id_instructor_pk PRIMARY KEY (id_instructor)
);


CREATE TABLE Inscripcion (
                id_inscripcion INTEGER IDENTITY NOT NULL,
                id_pago INTEGER NOT NULL,
                id_socio INTEGER NOT NULL,
                id_instructor INTEGER NOT NULL,
                id_rutina INTEGER NOT NULL,
                CONSTRAINT id_inscripcion_pk PRIMARY KEY (id_inscripcion)
);


ALTER TABLE Mi_Rutina ADD CONSTRAINT Rutina_Mi_Rutina_fk
FOREIGN KEY (id_rutina)
REFERENCES Rutina (id_rutina)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Inscripcion ADD CONSTRAINT Rutina_Inscripcion_fk
FOREIGN KEY (id_rutina)
REFERENCES Rutina (id_rutina)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Inscripcion ADD CONSTRAINT Tipo_de_Pago_Inscripcion_fk
FOREIGN KEY (id_pago)
REFERENCES Tipo_de_Pago (id_pago)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Registro ADD CONSTRAINT Visita_Registro_fk
FOREIGN KEY (id_visita)
REFERENCES Visita (id_visita)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Registro ADD CONSTRAINT Socio_Registro_fk
FOREIGN KEY (id_socio)
REFERENCES Socio (id_socio)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Inscripcion ADD CONSTRAINT Socio_Inscripcion_fk
FOREIGN KEY (id_socio)
REFERENCES Socio (id_socio)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Inscripcion ADD CONSTRAINT Instructor_Inscripcion_fk
FOREIGN KEY (id_instructor)
REFERENCES Instructor (id_instructor)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
