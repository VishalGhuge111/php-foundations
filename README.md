# PHP Foundations

This repository is a hands-on PHP learning path focused on backend fundamentals. Each folder contains small, practical examples that build from core language basics to form handling, database work, and a simple CRUD application.

## What This Repo Covers

- Core PHP syntax and control flow
- Variables, data types, strings, operators, and functions
- Form handling with GET and POST
- MySQL connection, database creation, table creation, and CRUD queries
- A full PHP + MySQL notes app with Bootstrap and DataTables

## Repository Structure

```text
php-foundations/
├── 01-basics/
│   ├── welcome/
│   ├── variables/
│   ├── data-types/
│   ├── strings/
│   ├── functions/
│   ├── if-else/
│   ├── loops/
│   └── operators/
├── 02-forms-db/
│   ├── index.php
│   ├── style.css
│   └── screenshots/
├── 03-mysql/
│   ├── 1.connection.php
│   ├── 2.create-database.php
│   ├── 3.create-db-table.php
│   ├── 4.insert-data.php
│   ├── 5.select-data.php
│   ├── 6.update-data.php
│   └── 7.delete-data .php
└── 04-crud-app/
	└── index.php
```

## Folder Guide

### 01-basics
Practice files for the PHP language itself. This section covers the building blocks before moving into databases or full applications.

- `welcome/` - first PHP output and basic page setup
- `variables/` - variable declaration and scope
- `data-types/` - strings, integers, booleans, arrays, and null
- `strings/` - string operations and manipulation
- `functions/` - function declarations, parameters, and return values
- `if-else/` - conditional logic
- `loops/` - for, while, and do-while loops
- `operators/` - arithmetic, assignment, comparison, increment/decrement, and logical operators

### 02-forms-db
A form-based PHP project that accepts user input and stores it in MySQL.

- Handles POST requests
- Validates form data
- Connects PHP to MySQL using MySQLi
- Uses prepared statements for safer database inserts
- Includes screenshot examples of the form flow

### 03-mysql
A step-by-step backend reference for raw MySQL operations in PHP.

- Connect to MySQL
- Create a database
- Create a table
- Insert, select, update, and delete records
- Learn the full CRUD flow one script at a time

### 04-crud-app
A small notes application that combines PHP, MySQL, Bootstrap, and DataTables.

- Create notes through a form
- Read and render notes in a table
- Edit notes through a Bootstrap modal
- Delete records with confirmation
- Search, sort, and paginate with DataTables

## Backend Learning Path

If you want to follow the repository in order, use this path:

1. Start with `01-basics` to understand PHP syntax and control flow.
2. Move to `02-forms-db` to learn form handling and database writes.
3. Study `03-mysql` as a backend reference for raw SQL operations from PHP.
4. Finish with `04-crud-app` to see everything combined into a usable app.

## Tech Stack

- PHP 8.x
- MySQL / MariaDB
- HTML and CSS
- Bootstrap 4 in the CRUD app
- jQuery and DataTables in the CRUD app
- XAMPP for local development

## How to Run Locally

1. Install XAMPP.
2. Start Apache and MySQL.
3. Place the `php-foundations` folder inside `C:/xampp/htdocs/`.
4. Open the project in your browser using the local URL for the folder you want to run.

Examples:

```text
http://localhost/php-foundations/01-basics/welcome/
http://localhost/php-foundations/02-forms-db/index.php
http://localhost/php-foundations/03-mysql/1.connection.php
http://localhost/php-foundations/04-crud-app/index.php
```

## Project Style

- Small, focused examples instead of one large framework app
- Comments used to explain logic and learning steps
- Each folder is self-contained so it can be studied independently

## Purpose

This repo is built as a backend learning journal and practice space for PHP fundamentals, database operations, and small real-world examples.
