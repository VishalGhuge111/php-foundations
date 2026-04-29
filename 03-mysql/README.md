# PHP MySQL Basics

A step-by-step practice module covering core MySQL operations in PHP — from connecting to a database all the way through full CRUD. Each file is a single focused script, built to isolate and understand one concept at a time.

---

## Project Structure

```
03-mysql/
├── 1.connection.php       # Connect to MySQL and verify the connection
├── 2.create-database.php  # Create a new database from PHP
├── 3.create-db-table.php  # Create a table with defined columns
├── 4.insert-data.php      # Insert a record using SQL INSERT
├── 5.select-data.php      # Fetch and display records using SELECT
├── 6.update-data.php      # Update an existing record using UPDATE + WHERE
├── 7.delete-data.php      # Delete a record using DELETE + WHERE
└── README.md
```

---

## What Each File Does

| File | Operation | What it covers |
|------|-----------|----------------|
| `1.connection.php` | Connect | `mysqli_connect`, connection error handling |
| `2.create-database.php` | Create DB | `CREATE DATABASE`, success/error output |
| `3.create-db-table.php` | Create Table | `CREATE TABLE`, column types, `AUTO_INCREMENT` |
| `4.insert-data.php` | Insert | `INSERT INTO`, static data insertion |
| `5.select-data.php` | Read | `SELECT *`, `mysqli_fetch_assoc`, looping results |
| `6.update-data.php` | Update | `UPDATE`, `WHERE` clause |
| `7.delete-data.php` | Delete | `DELETE FROM`, `WHERE` clause, result check |

---

## Table Structure

```sql
CREATE TABLE `forms` (
  `sno`    INT(11)      NOT NULL AUTO_INCREMENT,
  `name`   VARCHAR(255) NOT NULL,
  `age`    INT(3)       NOT NULL,
  `gender` VARCHAR(8)   NOT NULL,
  `email`  VARCHAR(22)  NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB;
```

---

## Setup & Usage

1. Place the `php-foundations` folder inside `C:/xampp/htdocs/`
2. Start **Apache** and **MySQL** from the XAMPP Control Panel
3. Run each file in order by visiting in your browser:

```
http://localhost/php-foundations/03-mysql/1.connection.php
http://localhost/php-foundations/03-mysql/2.create-database.php
http://localhost/php-foundations/03-mysql/3.create-db-table.php
http://localhost/php-foundations/03-mysql/4.insert-data.php
http://localhost/php-foundations/03-mysql/5.select-data.php
http://localhost/php-foundations/03-mysql/6.update-data.php
http://localhost/php-foundations/03-mysql/7.delete-data.php
```

Each script prints its result — success, error, or fetched data — directly in the browser.

---

## Key Learnings

- Connecting PHP to MySQL using `mysqli`
- Creating databases and tables programmatically from PHP
- Performing all CRUD operations with raw SQL
- Fetching and looping through query results with `mysqli_fetch_assoc`
- Basic error handling for database operations

---

## Note

These scripts use raw SQL strings without prepared statements — intentional for learning clarity. For any real application, always use prepared statements to prevent SQL injection.