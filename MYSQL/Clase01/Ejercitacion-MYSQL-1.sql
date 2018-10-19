SELECT first_name, last_name
FROM actors;

-- CONSULTA 5
SELECT *
FROM movies
WHERE release_date > '2000-01-01';

-- CONSULTA 6
SELECT *
FROM movies
WHERE release_date BETWEEN '2000-01-01' AND '2010-01-01';

-- CONSULTA 7
SELECT *
FROM movies
WHERE title = 'Toy Story';

-- CONSULTA 8
SELECT *
FROM actors
WHERE first_name = 'Mark';

-- CONSULTA 9
SELECT *
FROM actors
WHERE first_name != 'Mark' AND first_name != 'Sam';

SELECT *
FROM movies
WHERE (release_date < '1999-12-31' OR release_date > '2009-01-01') AND id >= 10;

-- ORDENAR NOMBRES DE ACTORES POR NOMBRE ASCENDENTE
SELECT *
FROM actors
ORDER BY first_name ASC;

-- PUNTO 13
SELECT *
FROM actors
ORDER BY first_name ASC, last_name;

-- PUNTO 14
SELECT *
FROM movies
ORDER BY release_date; -- sin ASC/DESC ordena de menor a mayor, de mas viejo a mas nuevo

-- PUNTO 15
SELECT *
FROM movies
WHERE release_date > '1900-12-01'
ORDER BY title;

-- PUNTO 16
SELECT title
FROM movies
LIMIT 5;

-- PUNTO 17
SELECT *
FROM movies
WHERE release_date > '2000-01-01'
LIMIT 3;

-- PUNTO 18
SELECT *
FROM movies
WHERE release_date > '2000-01-01'
ORDER BY title
LIMIT 3;

-- PUNTO 19
SELECT first_name
FROM actors
LIMIT 1;

-- PUNTO 20
SELECT title
FROM movies
ORDER BY title DESC
LIMIT 1;