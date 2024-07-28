# TODO App

Yet another Todo app. This application allows users to manage their tasks efficiently. It includes features like adding, completing, and deleting tasks. Additionally, it integrates with Telegram to manage tasks via a bot.

## Requirements

- PHP 8.3 or higher
- Composer
- MySQL

## Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/Nurullayev2004/API.git
    cd todo-app
    ```

2. Install dependencies using Composer:

    ```sh
    composer install
    ```

3. Set up the database:

    - Create a MySQL database named `TODO_LIST`.
    - Import the `dump.sql` file to set up the tables and initial data:

    ```sh
    mysqldump -u root -p TODO_LIST < dump.sql
    ```

## Usage

### Web Interface

Start a local PHP server:

```sh
php -S localhost:8080
