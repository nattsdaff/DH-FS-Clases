SELECT *
FROM movies AS m, genre AS a;

-- LINKEO DOS TABLAS y las muestro completas *
SELECT *
FROM movies AS m, genres AS g
WHERE m.genre_id = g.id;

-- LINKEO DOS TABLAS y muestro solo las columnas title y genero
SELECT m.title as Titulo, g.name as Genero
FROM movies as m, genres AS g
WHERE m.genre_id = g.id;

SELECT m.title as titulo, g.name as genero
FROM movies as m, genres as g -- aca declaro el alias que uso arriba en el SELECT
WHERE m.genre_id = g.id;

-- MUESTRO SOLO LAS TABLAS TITULO Y NOMBRE y uso los alias que declare en el FROM en la linea siguiente
SELECT m.title as Titulo, a.first_name as Nombre
FROM movies as m, actors as a, actor_movie as am
WHERE (m.id = am.movie_id) and (a.id =  am.actor_id);

-- EJERCICIO 1.B
-- Obtener las películas (movies) con sus actores (actors), ordenar por nombre de pelicula y nombre de los actores
-- MUESTRO todas las tablas = misma consulta que la de arriba
SELECT *
FROM movies as m, actors as a, actor_movie as am
-- pido que linkee el PK (id) de "movies" con el FK movie_id y el FK actor_id de la tabla "actor_movie"
WHERE (m.id = am.movie_id) and (a.id =  am.actor_id)
ORDER BY m.title;

-- EJERCICIO 1.c: Obtener los actores (actors) y las películas (movies) a las que pertenecieron
SELECT a.first_name as Nombre, a.last_name as Apellido, m.title as Titulo -- esto es LO QUE MUESTRO EN EL OUTPUT,
-- NO TIENE NADA QUE VER CON EL WHERE
FROM actors as a, movies as m, actor_movie as am
-- pido que linkee el PK (id) de "actors" con el FK movie_id y el FK actor_id de la tabla "actor_movie"
WHERE (a.id = am.actor_id) and (m.id = am.movie_id);

-- 2.a: c/WHERE: películas (movies) y sus géneros (genres), ordenando por nombre de película
SELECT m.title as Titulo, g.name as Genero
FROM movies as m, genres as g
WHERE m.genre_id = g.id
ORDER BY m.title;

-- 2.a: c/JOIN: películas (movies) y sus géneros (genres), ordenando por nombre de película
SELECT m.title as Titulo, g.name as Genero
FROM movies as m
INNER JOIN genres as g ON m.genre_id = g.id
ORDER BY m.title;

-- 2.b: películas (movies) con sus actores (actors). Ordenar por nombre de pelicula y nombre de los actores
SELECT m.title as Titulo, a.first_name as Nombre
FROM movies as m
INNER JOIN actor_movie as am ON m.id = am.movie_id
INNER JOIN actors as a ON a.id = am.actor_id
ORDER BY m.title asc;

-- 2.c: actores (actors) y las películas (movies) a las que pertenecieron
SELECT a.first_name, a.last_name, m.title
FROM actors as a
INNER JOIN actor_movie as am ON a.id = am.actor_id
INNER JOIN movies as m ON m.id = am.movie_id
ORDER BY a.first_name;

-- 2.d: géneros ordenados de mayor a menor por su nombre, con referencia a las películas (movies) utilizando joins (usar name y title)
SELECT g.name, m.title
FROM genres as g
INNER JOIN movies as m 
	ON m.genre_id = g.id
ORDER BY g.name;

-- 2e:películas (movies) con sus géneros y los actores que participen en cada una
SELECT a.first_name as Nombre, a.last_name as Apellido, m.title as Titulo, g.name as Genero
FROM movies as m
INNER JOIN genres as g 
	ON m.genre_id = g.id
INNER JOIN actor_movie as am
	ON m.id = am.movie_id
INNER JOIN actors as a
	ON a.id = am.actor_id
ORDER BY m.title;

-- 2f: Obtener las películas (movies) y el género (genres) si lo posee. Ordenar por nombre de película de menor a mayor
SELECT m.title as titulo, g.name as genero 
FROM movies as m
LEFT JOIN genres as g -- es un LEFT JOIN porque me pide todas, aunque genero sea NULL.
	ON m.genre_id = g.id
ORDER BY m.title;
-- ORDER BY g.name; -- muestra PRIMERO LOS NULL.

-- 2g: Obtener los actores (actors) y las películas (movies) en las que participaron
SELECT m.title as titulo, a.first_name as Nombre
FROM actors as a
INNER JOIN actor_movie as am
	ON a.id = am.actor_id
INNER JOIN movies as m
	on m.id = am.movie_id
ORDER BY am.actor_id;

-- 2h:Obtener las películas (movies) con sus géneros (genres) si los posee y 
-- los géneros con todas las películas que le corresponden, ambas en una sola consulta,
SELECT m.title as titulo, g.name as genero
FROM movies as m
LEFT JOIN genres as g ON (m.genre_id = g.id) and (g.id = m.genre_id);

-- 2h:Obtener las películas (movies) con sus géneros (genres) si los posee y 
-- los géneros con todas las películas que le corresponden, ambas en una sola consulta,
SELECT m.title as titulo, g.name as genero
FROM movies as m
RIGHT JOIN genres as g on m.genre_id = g.id; -- todos los generos aunque no esten asociados a movies

