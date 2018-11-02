-- Insertar 5 películas nuevas (movies) a la tabla aclarando todos sus campos.
INSERT INTO movies (title, rating, awards, release_date, length, genre_id)
VALUES ('Esperando la carroza', 8.2, 5, '1990-10-12', 120, 5);

-- COMPROBAR QUE LO AGREGO
SELECT * FROM movies;

-- ***********************
-- Insertar 5 registros a la tabla películas (movies) sin aclarar -> ERROR
-- el valor del campo awards
INSERT INTO movies (title, rating, awards, release_date, length, genre_id)
VALUES ('El codigo enigma', 9.5, '2016-10-12', 120, 5);

-- ***********************
-- Insertar 5 actores (actors) aclarando todos sus campos.
INSERT INTO actors (first_name, last_name)
VALUES ('Ricardito', 'Atalaya');

-- ***********************
-- Insertar 5 actores (actors) sin aclarar el campo last_name
-- Error Code: 1364. Field 'last_name' doesn't have a default value
INSERT INTO actors (first_name)
VALUES ('Ricardito');

-- ***********************
-- Modificar todas las películas (movies) para que el campo awards = null
-- Error Code: 1048. Column 'awards' cannot be null
UPDATE movies
SET awards = NULL;

-- ***********************
-- Modificar todas las películas (movies) que hayan salido en el 2008 para que
-- tengan 2 premios (usar release_date y awards)

-- primero hago un SELECT PARA VER SI EXISTEN
SELECT * 
FROM movies 
WHERE release_date < '2008-12-31' 
	AND release_date > '2007-01-01';

-- modifico el campo awards
UPDATE movies
SET awards = 2
WHERE release_date < '2008-12-31' 
	AND release_date > '2007-01-01';
    
    
-- ***********************
SELECT *
FROM movies;
-- WHERE awards = 0;


-- ***********************
-- PRIMERO VEO CUAL ES EL ULTIMO ID
SELECT *
FROM movies
ORDER BY id DESC;
-- LO BORRO
DELETE FROM movies 
WHERE id = 22;
-- CHECKEO SI BORRO Y COMO QUEDO LA TABLA UPDATED
SELECT * 
FROM movies;


-- ***********************
SELECT *, release_date AS lanzamiento
FROM movies
WHERE release_date 
BETWEEN '1999-10-31' AND '2004-12-31'
LIMIT 1;

-- Obtener las películas (movies) que tengan duración entre 45 minutos y 2
-- horas y media, ordenarlo por esta columna (usar length) .
SELECT *
FROM movies
WHERE length
BETWEEN 45 and 180
ORDER BY length ASC;

-- Obtener los actores (actors) esté entre los que empieza con “HE" y con "SE"
SELECT *
FROM actors
WHERE first_name BETWEEN 'HE%' AND 'SE%'
ORDER BY first_name ASC;

-- Obtener los actores (actors) que el nombre empiece con “HE" y con "TO"
SELECT *
FROM actors
WHERE first_name LIKE 'HE%' OR first_name LIKE 'TO%'
ORDER BY first_name ASC;
 
-- Obtener las películas (movies) que empiezan con la letra “T”, ordenarlo descendente
SELECT *
FROM movies
WHERE title LIKE 'T%'
ORDER BY title DESC;

-- Obtener las películas (movies) que empiezan con la letra “T” y terminen con la letra “C”, ordenarlo asc (es x defecto)
SELECT *
FROM movies
WHERE title LIKE 'T%' AND title LIKE '%C'
ORDER BY title ASC; -- puedo no poner nada porque por defecto ordena ASC

-- Obtener las películas (movies) hechas en el año 2000, ordenarlo por nombre de la película
SELECT *, title AS titulo -- SE ME OCURRE DECLARAR UN ALIAS
FROM movies
WHERE release_date BETWEEN '2000-01-01' AND '2000-12-31' -- ACA NO SIRVE EL ALIAS
ORDER BY titulo DESC;

-- Obtener las películas (movies) que en el título contenga un guión “-”
SELECT *, title AS titulo
FROM movies
WHERE title LIKE '%-%';

-- Obtener las películas (movies) hechas en el mes de Octubre o en el año 1999
-- ordenar que el año sea el primer ordenamiento y el título de mayor a menor
SELECT * 
FROM movies 
WHERE release_date BETWEEN '1999-01-01' AND '1999-12-31'
	OR release_date LIKE '%-10-%'
ORDER BY release_date ASC, title ASC;

-- Obtener los actores (actors) que de nombre tengan: inicie con “J” con cuatro
-- letras de comodín y finalicen con “Y”.
SELECT *
FROM actors
-- WHERE first_name LIKE 'J%Y' AND first_name <= 3;
WHERE first_name LIKE 'J____y';

-- Obtener los actores (actors) cuyos nombres terminen en ‘AM’, ordenarlos por
-- el apellido y por el nombre de menor a mayor
SELECT *
FROM actors 
WHERE first_name LIKE '%AM'
ORDER BY last_name ASC;

-- Obtener las películas (movies) que contengan en su título la letra “Y” como
-- conjunción y además contenga ‘“LA”.
SELECT *
FROM movies
WHERE title LIKE '% y %' AND title LIKE '%la%'; -- VOILAAAA!

-- Obtener los actores (actors) que contengan en el apellido ‘“DE” ó ‘ll’ y en el nombre “A”.
SELECT * 
FROM actors
WHERE (last_name LIKE '%DE%' OR last_name LIKE '%ll%')
	AND first_name LIKE '%A%';

-- películas (movies) que sean de la saga de “Toy Story” y las películas de la saga de “Harry Potter” 
-- con duración de 2 horas. Ordenarlas por nombre ascendente y luego por duración en descendente
SELECT *
FROM movies
WHERE (title LIKE '%TOY story%' OR title LIKE '%potter%') AND length = 120
ORDER BY title, length DESC;

-- Obtener todas las películas (movies) que tengan de rating “8.3”, “9.1” y “9.0”.
SELECT *
FROM movies
WHERE rating IN ('8.3', '9.1', '9.0');

-- Obtener todas las películas (movies) que tengan 2, 5 o 7 premios.
-- Ordenarlas de manera que muestre los que tengan mayores premios primero
SELECT *
FROM movies
WHERE awards IN (2, 5, 7)
ORDER BY awards DESC;

-- las películas (movies) que SÍ tengan duración. Mostrar primero las que tengan menor duración
SELECT *
FROM movies
WHERE length IS NULL
ORDER BY length DESC;

-- IGUAL QUE ARRIBA USANDO MONTH(campo)
SELECT * 
FROM movies
WHERE MONTH(release_date) != '07'
ORDER BY release_date desc;

-- las películas (movies) que no sean del mes de Julio.
SELECT * 
FROM movies
WHERE release_date LIKE '%_____%%___%' != release_date LIKE '%_____07___%'
ORDER BY release_date desc;

-- actores (actors) que en el apellido no contengan la letra “K”.
SELECT * 
FROM actors
WHERE last_name NOT LIKE '%K%';

-- las películas (movies) que no tengan duración de 2 y 2 horas y media.
SELECT *
FROM movies
WHERE length != 120 AND length != 180
ORDER BY title ASC;

-- Retornar de la tabla películas (movies) los valores de la columna title como “Título de la Pelicula”.
SELECT title AS titulo_de_pelicula
FROM movies
ORDER BY titulo_de_pelicula;

-- Obtener los campos “ id ” como “id_genero”, “ name ” como “nombre_genero” de la tabla generos (genres)
-- Ordenarlo por nombre_genero de menor a mayor.
SELECT id AS id_genero, name AS nombre_genero
FROM genres
ORDER BY nombre_genero ASC;