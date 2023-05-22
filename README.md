# Visitor Management System

The Visitor Management System is a web application built with Laravel that allows users to register and manage visitors.

## Prerequisites

Make sure you have the following software installed on your local machine:

- PHP (version 7.3 or higher)
- Composer
- MySQL

## Getting Started

Follow these steps to set up and run the project on your local machine:

1. Clone the repository:

   ```bash
   git clone https://github.com/yyueniao/visitor-management-system.git
   ```

2. Navigate to the project directory:

   ```bash
   cd visitor-management-system
   ```

3. Install the dependencies via `npm`:

   ```bash
   npm install
   ```

4. Install the dependencies via `composer`:

   ```bash
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Update the `.env` file with your database credentials.

7. Run the database migrations:

   ```bash
   php artisan migrate
   ```

8. Start the local development server:

   ```bash
   php artisan serve
   ```

9. Access the application in your web browser at `http://localhost:8000`.

## Additional Configuration

- If you want to use a different web server (e.g., Apache or Nginx), configure it to point to the `public` directory of the project.
