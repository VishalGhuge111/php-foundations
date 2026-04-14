# PHP Basics

Hands-on practice with core PHP concepts and syntax fundamentals.

## Topics Covered

### Core Syntax
- **welcome/** - First PHP program and basic syntax
- **variables/** - Variable declaration and scope
- **data-types/** - String, integer, float, boolean, array, null

### Operators
- **operators/arithmetic/** - Addition, subtraction, multiplication, division, modulus
- **operators/assignment/** - Assignment variations (=, +=, -=, *=, /=)
- **operators/comparison/** - Comparison operations (==, !=, >, <, >=, <=)
- **operators/logical/** - Boolean logic (&&, ||, !)

### Control Flow
- **if-else/** - Conditional statements and nested conditions
- **loops/for.php** - For loop with iterations
- **loops/while.php** - While loop implementations
- **loops/do-while.php** - Do-while loop examples

### Built-in Features
- **functions/** - Function declaration, parameters, return values
- **strings/** - String manipulation and common operations

## Learning Approach

Each folder contains practical examples with real-world scenarios rather than abstract demonstrations. Code is written to understand concepts through implementation, not theory.


## Usage

### Using XAMPP (Recommended)

1. **Start XAMPP Control Panel**
2. **Start Apache and MySQL** modules
3. Place the `php-foundations` folder inside your XAMPP `htdocs` directory (usually `C:/xampp/htdocs/`)
4. Open your browser and visit:

	http://localhost/php-foundations/01-basics/welcome/

You can open any topic by navigating to its folder in the URL, for example:

	http://localhost/php-foundations/01-basics/variables/

---

### (Optional) Run from CLI

Navigate to any topic folder and run the PHP file:

```bash
php 01-basics/welcome/index.php
```

Or use PHP's built-in server (if not using XAMPP):

```bash
php -S localhost:8000
```

Then visit: http://localhost:8000/01-basics/welcome/

## Progress

Building foundation before moving to database integration and application development.

ROOT README for php-foundations repo
markdown# PHP Foundations

Building backend fundamentals through hands-on PHP projects and practical implementations.

## Repository Structure
php-foundations/
├── 01-basics/          # Core PHP syntax and concepts
└── README.md

## Current Progress

### ✅ Completed
- PHP syntax fundamentals
- Variables and data types
- Operators (arithmetic, assignment, comparison, logical)
- Control structures (if-else, switch)
- Loops (for, while, do-while)
- Functions (parameters, return values, defaults)
- String operations

### 🔄 In Progress
- Form handling with GET/POST
- MySQL database integration
- CRUD operations

### 📋 Planned
- User authentication system
- Session management
- File uploads
- Mini projects

## Tech Stack

- PHP 8.x (vanilla - no frameworks)
- MySQL
- HTML/CSS (minimal, for functionality)

## Learning Approach

Focus on building rather than just reading documentation. Each implementation solves a practical problem with clean, readable code.

## Setup

**Requirements:**
- PHP 8.0 or higher
- MySQL (for database topics)

**Run locally:**
```bash
# Clone repository
git clone https://github.com/VishalGhuge111/php-foundations.git
cd php-foundations

# Start PHP server
php -S localhost:8000

# Visit in browser
http://localhost:8000
```

## Structure

Each topic is organized in its own folder with:
- Working code examples
- Practical use cases
- Comments explaining logic

## Purpose

Preparing for backend development roles with focus on PHP fundamentals, database operations, and building real-world applications.

---

**Building in public** • Learning by doing • Backend fundamentals first