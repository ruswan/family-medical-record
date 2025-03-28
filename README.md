# Family Medical Record

## Overview

Family Medical Record is a web-based application developed using Laravel and FilamentPHP to record and manage family health histories. This system helps users track medical conditions, medications, and health records efficiently.

## Features

-   User authentication and family management
-   Recording sick history and medical history
-   Managing different types of illnesses
-   Logging prescribed medications
-   Role-based access control (admin and users)
-   Responsive and user-friendly UI with FilamentPHP

## Technologies Used

-   Laravel (PHP Framework)
-   FilamentPHP (Admin Panel)
-   MySQL (Database)

## Installation

### Prerequisites

-   PHP 8.1+
-   Composer
-   MySQL Database

### Steps

1. Clone the repository:
    ```sh
    git clone https://github.com/ruswan/family-medical-record.git
    cd family-medical-record
    ```
2. Install dependencies:
    ```sh
    composer install
    ```
3. Copy the environment file and configure database settings:
    ```sh
    cp .env.example .env
    ```
4. Generate application key:
    ```sh
    php artisan key:generate
    ```
5. Run database migrations and seeders:
    ```sh
    php artisan migrate --seed
    ```
6. Start the local development server:
    ```sh
    php artisan serve
    ```

## Usage

-   Register a new user and create a family group
-   Add sick histories and medications for family members
-   Use the FilamentPHP admin panel for managing records

## Contribution

Contributions are welcome! Feel free to fork the repository and submit pull requests.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any issues or feature requests, please open an issue in the repository or contact the maintainer.
