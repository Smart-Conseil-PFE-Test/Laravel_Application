# Laravel Articles App

## Project Overview

This Laravel application provides a simple backend for managing articles, exposing two endpoints:

- `GET /articles`: Fetch all articles.
- `GET /articles/{id}`: Fetch a specific article by ID.

## Article Model Structure

The database schema for the **Article** model is defined as follows:

| Field        | Type        | Description                           |
|--------------|-------------|---------------------------------------|
| `id`         | int         | Primary Key                           |
| `title`      | varchar(1000)| Article title                        |
| `image`      | varchar(255)| Path to the article image             |
| `headerImage`| varchar(255)| Path to the header image              |
| `introduction`| mediumtext  | Article introduction                  |
| `description`| text        | Full description of the article       |
| `lastMod`    | datetime    | Last modified timestamp, default `CURRENT_TIMESTAMP` |
| `language`   | varchar(2)  | Language code                         |
| `keyWords`   | varchar(1000)| Associated keywords                  |
| `state`      | int         | Article state                         |
| `numVisit`   | int         | Number of visits                      |
| `idTheme`    | int         | Theme ID                              |
| `idUser`     | int         | User ID                               |
| `idHost`     | int         | Host ID                               |

## Directory Structure

```bash

laravel_application/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── ArticleController.php : Controller for handling article-related requests
│   │       └── Controller.php : Base controller for the app
│   ├── Models/
│   │   └── Article.php : Article model defining the schema and logic for article data
│   └── Providers/
│       └── AppServiceProvider.php : Application service provider for bootstrapping services
├── bootstrap/ : Framework bootstrap files  
├── config/ : Configuration files  
├── database/ : Database migrations, seeders, and factories  
├── public/ : Web-accessible resources  
├── resources/ : View templates and frontend assets  
├── routes/
│   ├── console.php : Artisan console routes  
│   └── web.php : Web routes including API endpoints for articles  
├── storage/ : Compiled assets, logs, and other generated files  
├── tests/ : Unit and feature tests  
├── vendor/ : Composer dependencies  
├── artisan : CLI entry point for Laravel  
├── composer.json : Composer configuration file  
├── package.json : NPM configuration for managing frontend assets  
├── postcss.config.js : PostCSS configuration  
├── tailwind.config.js : Tailwind CSS configuration  
├── vite.config.js : Vite build configuration  
└── README.md : Project readme  
```

## Endpoints Documentation

### 1. Fetch All Articles

- **URL**: `http://127.0.0.1:8000/articles`
- **Method**: `GET`
- **Description**: Returns a list of all available articles.

**Sample Response**:

```json
[
  {
    "id": 1,
    "title": "Introduction to Laravel",
    "image": "/images/laravel.jpg",
    "introduction": "Learn the basics of Laravel...",
    "description": "Laravel is a web application framework...",
    "language": "EN",
    "numVisit": 150
  }
]
```

### 2. Fetch Article by ID

URL: http://127.0.0.1:8000/articles/{id}
Method: GET
Description: Fetches details of a specific article by its ID.
Sample Request:

bash
Copy
Edit
GET /articles/1
Sample Response:

json
Copy
Edit

```json
{
  "id": 1,
  "title": "Introduction to Laravel",
  "image": "/images/laravel.jpg",
  "headerImage": "/images/header.jpg",
  "introduction": "Learn the basics of Laravel...",
  "description": "Laravel is a web application framework...",
  "language": "EN",
  "keyWords": "Laravel, PHP, Framework",
  "numVisit": 150,
  "lastMod": "2025-02-01 12:34:56"
}
```

### Technical Stack

Backend: Laravel 11.31
Database: MySQL
Development Tools: Composer, Vite, PostCSS
Testing Tools: PHPUnit, Mockery
Setup Instructions
Clone the repository:

bash
Copy
Edit
git clone https://github.com/Smart-Conseil-PFE-Test/Laravel_Application.git

cd your-repository

### Install dependencies

bash
Copy
Edit
composer install
npm install
Set up environment file: Copy .env.example to .env and configure database and other settings:

bash
Copy
Edit
cp .env.example .env
Generate application key:

bash
Copy
Edit
php artisan key:generate
Run migrations:

bash
Copy
Edit
php artisan migrate
Serve the application:

bash
Copy
Edit
php artisan serve
Now, the application should be running at http://127.0.0.1:8000.

For any issues or contributions, feel free to open an issue or submit a pull request.

css
Copy
Edit

This structure enhances readability, ensures better understanding, and organizes the technical details effectively for a markdown file.
