CREATE DATABASE colegio2

USE colegio2;


CREATE Table estudiantes(
-- Pongo todos los name="" de los inputs de "registro_estudiantes.php"
codigo INT(100), -- INT(100) es que solo podemos llegar a 999
nombre VARCHAR(50),
identificacion VARCHAR(20),
telefono VARCHAR(20),
direccion VARCHAR(500),
mail VARCHAR(100),
curso VARCHAR(20) -- Al final nunca ponemos ","
);



drop DATABASE colegio -- Para eliminar una table bd

CREATE Table profesores(
-- Usamos los mismos códigos porque los he puesto de misma forma en el name="" para el archivo de registro_profesores.php
codigo INT(100),
nombre VARCHAR(50),
identificacion VARCHAR(20),
telefono VARCHAR(20),
direccion VARCHAR(500),
mail VARCHAR(100),
curso VARCHAR(20) -- Al final nunca ponemos ","
);

CREATE Table notas(
nombre VARCHAR(30),
codigo INT(10),
notas VARCHAR(15) -- Al final nunca ponemos ","
);

CREATE Table pago_tarjetas(
fecha DATE,
importe INT (50),   
tarjeta VARCHAR (30)    -- Aunque es un nº no se van a hacer operaciones con él.    
);

CREATE Table gestion_caja(
fecha1 DATE,
nombre1 VARCHAR(50),
identificacion1 VARCHAR (30),
direccion1 VARCHAR (200),
curso1 VARCHAR (20),
cuota1 INT(10),
costo1 INT(10),
descripcion1 VARCHAR (1000)
);

drop Table gestion_caja;

CREATE Table gestion_caja(
fecha1 DATE,
nombre1 VARCHAR(50),
identificacion1 VARCHAR (30),
direccion1 VARCHAR (200),
curso1 VARCHAR (20),
cuota1 INT(10),
costo1 INT(10),
descripcion1 VARCHAR (1000)
);

