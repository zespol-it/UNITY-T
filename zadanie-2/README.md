# Zadanie 2 — Schemat bazy danych książek

## Opis (Polski)

Baza danych przechowuje autorów książek, książki oraz recenzje. Struktura relacji przedstawia się następująco:

### Diagram ERD (UML)

![Diagram ERD](uml/erd.jpg)

### Diagram relacji (UML)

![Diagram relacji](uml/relations.jpg)

### Diagram widoków (UML)

![Diagram widoków](uml/views.jpg)

### Diagram ERD (tekstowy)

```
+-----------+         +----------+         +---------+
|  authors  | 1     * |  books   | 1     * | reviews |
+-----------+---------+----------+---------+---------+
| id (PK)   |         | id (PK)  |         | id (PK) |
| first_name|         | author_id|         | book_id |
| last_name |         | title    |         | rating  |
+-----------+         | pub_year |         | content |
                      | isbn     |         +---------+
                      +----------+
```

- Jeden autor może napisać wiele książek.
- Jedna książka może mieć wiele recenzji.

### Tabele
- **authors**: imię, nazwisko
- **books**: tytuł, rok publikacji, ISBN, powiązanie z autorem
- **reviews**: ocena (1-10), treść, powiązanie z książką

---

# Task 2 — Book Database Schema

## Description (English)

The database stores book authors, books, and reviews. The relationship structure is as follows:

### ERD Diagram (UML)

![ERD Diagram](uml/erd.jpg)

### Relations diagram (UML)

![Relations diagram](uml/relations.jpg)

### Views diagram (UML)

![Views diagram](uml/views.jpg)

### ERD Diagram (text)

```
+-----------+         +----------+         +---------+
|  authors  | 1     * |  books   | 1     * | reviews |
+-----------+---------+----------+---------+---------+
| id (PK)   |         | id (PK)  |         | id (PK) |
| first_name|         | author_id|         | book_id |
| last_name |         | title    |         | rating  |
+-----------+         | pub_year |         | content |
                      | isbn     |         +---------+
                      +----------+
```

- One author can write many books.
- One book can have many reviews.

### Tables
- **authors**: first name, last name
- **books**: title, publication year, ISBN, linked to author
- **reviews**: rating (1-10), content, linked to book 