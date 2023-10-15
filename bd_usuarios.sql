CREATE DATABASE usuarios
USE usuarios
CREATE TABLE usuarios (
  'DNI' int PRIMARY KEY,
  'Nombres' varchar(50),
  'Apellidos' varchar(50),
  'Correo' varchar(50),
  'Telefono' int,
  'Direccion' varchar(50)
)