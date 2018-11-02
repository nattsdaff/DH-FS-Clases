-- todos los géneros (genres) y la cantidad de películas (movies) que tiene cada uno
SELECT g.name as Genero, COUNT(m.title) -- NECESITO CONTARLOS PARA QUE PUEDAN ENTRAR EN EL GROUP BY
FROM genres AS g
	INNER JOIN movies as m ON g.id = m.genre_id
GROUP BY g.name;

-- el rating más bajo de las películas (movies) por género (usar name de la tabla genres) .
SELECT g.name, MIN(m.rating) as 'rating desde minimo'
FROM movies as m
	INNER JOIN genres as g ON m.genre_id = g.id
GROUP BY g.name, m.rating; -- necesito agruparlos para poder usar el SELECT

-- Obtener el rating (rating) más alto de las películas (movies) por género
SELECT g.name, MAX(m.rating) as 'rating desde maximo'
FROM movies as m
	INNER JOIN genres as g ON m.genre_id = g.id
GROUP BY g.name; -- AGREGACION


-- Obtener el promedio de ratings (rating) de películas (movies) por género
SELECT g.name as Genero, AVG(m.rating) as 'promedio rating'
FROM movies as m
	INNER JOIN genres as g ON m.genre_id = g.id
GROUP BY g.name;

-- Obtener los títulos de las series y la cantidad de temporadas
SELECT s.title as Titulo, MAX(ss.number)
FROM series as s
	INNER JOIN seasons as ss ON s.id = ss.serie_id 
GROUP BY ss.serie_id;

-- Obtener por cada temporada (seasons) el título de la serie (title) y la cantidad de capítulos (usar number de la tabla episodes) .
SELECT seasons.title, series.title, episodes.number
FROM seasons
	INNER JOIN series ON seasons.serie_id = series.id
    INNER JOIN episodes ON seasons.id = episodes.season_id
GROUP BY series.title, seasons.title, episodes.number;


-- Obtener por cada capítulo (episodes) el número de temporada (seasons) , el
-- nombre de la serie (series) , el género (genres) y la cantidad de actores (actors) que tiene.
SELECT e.title as Episodio, ss.number as Temporada, s.title as Titulo, g.name as Genero, count(e.id)
FROM episodes as e
	INNER JOIN seasons as ss ON ss.id = e.season_id
    INNER JOIN series as s ON ss.serie_id = s.id
    INNER JOIN genres as g ON s.genre_id = g.id
    INNER JOIN actor_episode as ae ON e.id = ae.episode_id
GROUP BY e.id;

-- Obtener todos los géneros (genres) y la cantidad de películas (movies) con rating (rating) mayor a 5.
SELECT distinct g.name as genero, m.title as titulo, m.rating as rating
FROM movies as m
	INNER JOIN genres as g ON m.genre_id = g.id
HAVING m.rating > 5;