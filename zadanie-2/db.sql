-- Schemat bazy danych
CREATE TABLE authors (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL
);

CREATE TABLE books (
    id SERIAL PRIMARY KEY,
    author_id INTEGER NOT NULL REFERENCES authors(id),
    title VARCHAR(255) NOT NULL,
    publication_year INTEGER NOT NULL,
    isbn VARCHAR(20) NOT NULL
);

CREATE TABLE reviews (
    id SERIAL PRIMARY KEY,
    book_id INTEGER NOT NULL REFERENCES books(id),
    rating INTEGER NOT NULL CHECK (rating BETWEEN 1 AND 10),
    content TEXT
);

-- Widok: 5 autorów z najwyższą średnią ocen wszystkich książek
CREATE OR REPLACE VIEW top5_authors_by_avg_rating AS
SELECT a.id, a.first_name, a.last_name, AVG(r.rating) AS avg_rating
FROM authors a
JOIN books b ON a.id = b.author_id
JOIN reviews r ON b.id = r.book_id
GROUP BY a.id
ORDER BY avg_rating DESC
LIMIT 5;