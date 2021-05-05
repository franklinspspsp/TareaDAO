-- Base de Datos Instituto 

DROP DATABASE IF EXISTS bdcolegio;

CREATE DATABASE IF NOT EXISTS bdcolegio; 

USE bdcolegio;

-- tabla alumno
DROP TABLE IF EXISTS talumno;
CREATE TABLE IF NOT EXISTS talumno(
  Id char(5) NOT NULL,
  Nombres varchar(50) NOT NULL,
  Apellidos varchar(50) NOT NULL,
  Sexo varchar (50) NOT NULL,
  FechaNacimiento date NOT NULL,
  FechaRegistro date NOT NUll,
  Correo char(20) NOT NULL
  PRIMARY KEY (Id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- tabla curso
DROP TABLE IF EXISTS tcurso;
CREATE TABLE IF NOT EXISTS tcurso (
  Idcurso char(5) NOT NULL,
  Nombrecurso varchar(50) NOT NULL,  
  PRIMARY KEY(Idcurso)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- tabla alumnocurso
DROP TABLE IF EXISTS talumnocurso;
CREATE TABLE IF NOT EXISTS talumnocurso(
    Idcurso char(5) not null,
    Id char(5) not null,
    primary key(Idcurso,Id),
    foreign key(IdCurso) references talumno(Id),
    foreign key(IdCurso) references tcurso(Idcurso)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

    
select * from talumno;    
select * from tcurso;
select * from talumnocurso;



