# Konsultasi Mata - Medical Consultation Management System

A Laravel-based web application for managing medical consultations, patients, and appointments. This system provides a comprehensive solution for healthcare professionals to manage their patient records and appointment scheduling.

## Features

-   **Patient Management**: Create, view, edit, and manage patient records
-   **Appointment Scheduling**: Schedule, view, and manage medical appointments
-   **User Authentication**: Secure login and registration with email verification
-   **Responsive Design**: Mobile-friendly interface built with Tailwind CSS
-   **Role-based Access**: Built on Laravel Jetstream for team management

## Requirements

-   PHP 8.1 or higher
-   Composer
-   Node.js & NPM
-   MySQL or PostgreSQL database

## Installation

1. **Clone the repository:**

    ```bash
    git clone <repository-url>
    cd konsultasi-mata
    ```

2. **Install PHP dependencies:**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies:**

    ```bash
    npm install
    ```

4. **Environment Configuration:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other configuration settings.

5. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run database migrations:**

    ```bash
    php artisan migrate
    ```

7. **Build assets:**

    ```bash
    npm run build
    ```

8. **Start the development server:**
    ```bash
    php artisan serve
    ```

## Database Setup

The application includes the following database tables:

-   `users` - User accounts and authentication
-   `patients` - Patient information and medical records
-   `appointments` - Appointment scheduling and management

Run the migrations to set up the database structure:

```bash
php artisan migrate
```

## Usage

1. **Register a new account** or login with existing credentials
2. **Verify your email** if required
3. **Navigate to Patients** to manage patient records
4. **Navigate to Appointments** to schedule and manage consultations
5. **Use the dashboard** to view an overview of your data

## Key Routes

-   `/dashboard` - Main dashboard
-   `/patients` - Patient management
-   `/appointments` - Appointment management
-   `/login` - User login
-   `/register` - User registration

## Technologies Used

-   **Laravel 11** - PHP framework
-   **Laravel Jetstream** - Authentication and team management
-   **Laravel Fortify** - Authentication backend
-   **Tailwind CSS** - Styling framework
-   **Alpine.js** - Frontend JavaScript framework
-   **MySQL/PostgreSQL** - Database

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests
5. Submit a pull request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
