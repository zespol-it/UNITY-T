-- Imiona i nazwiska autorów wraz z liczbą napisanych książek
SELECT a.first_name, a.last_name, COUNT(b.id) AS books_count
FROM authors a
LEFT JOIN books b ON a.id = b.author_id
GROUP BY a.id;