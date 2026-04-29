# PHP MySQL CRUD App

A backend-focused project built to practice full CRUD operations using PHP and MySQL. Users can create, view, edit, and delete notes through a clean UI backed by a MySQL database.

---

## Features

- Create, Read, Update, Delete (CRUD) operations via PHP + MySQL
- Edit notes via a Bootstrap modal (no page redirect)
- Delete confirmation prompt before removal
- DataTables integration for search, sort, and pagination
- Flash messages for insert, update, and delete feedback

---

## Tech Stack

- PHP
- MySQL (via XAMPP / phpMyAdmin)
- HTML, Bootstrap 4
- jQuery + DataTables

---

## Project Structure

```
04-crud-app/
├── index.php      # All CRUD logic, form UI, and notes table
└── README.md      # Project documentation
```

---

## How It Works

- **Create** — User fills the form and submits via POST; PHP inserts the note into the database
- **Read** — All notes are fetched with `SELECT *` and rendered in a DataTable
- **Update** — Clicking Edit opens a modal pre-filled with the note's data; on submit, PHP runs an `UPDATE` query
- **Delete** — Clicking Delete triggers a confirm prompt; on confirm, PHP runs a `DELETE` query via GET parameter

---

## Setup Instructions

### 1. Install XAMPP
Download from [https://www.apachefriends.org/](https://www.apachefriends.org/) and install.

### 2. Start Services
Open the XAMPP Control Panel and start **Apache** and **MySQL**.

### 3. Set Up the Database
- Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
- Create a database named `notes`
- Create a `notes` table with the following columns:

| Column      | Type         | Notes                       |
|-------------|--------------|-----------------------------|
| sno         | INT          | Primary key, auto increment |
| title       | VARCHAR(100) |                             |
| description | TEXT         |                             |
| tstamp      | TIMESTAMP    | Filled by `current_timestamp()` |

### 4. Run the Project
Place the project folder inside `htdocs`:
```
C:/xampp/htdocs/php-foundations/04-crud-app/
```
Then open in your browser:
```
http://localhost/php-foundations/04-crud-app/index.php
```

---

## Key Learnings

- Performing all four CRUD operations using PHP and MySQLi
- Handling both GET and POST requests in a single PHP file
- Using JavaScript to pre-fill a Bootstrap modal for inline editing
- Integrating DataTables for client-side search and pagination

---

## Known Limitations

- SQL queries use raw string interpolation (not prepared statements) — vulnerable to SQL injection
- No server-side input validation
- Delete operation uses GET request (should use POST for data-modifying actions)

---

## Future Improvements

- Refactor queries to use prepared statements
- Add server-side validation
- Separate PHP logic from HTML presentation