# ToDo List Application

This project is a **ToDo List application** developed using PHP. It allows users to manage tasks by adding, editing, and deleting items from their to-do list. This application is a personal project to enhance skills in PHP development.

## Features

- **Add Tasks**: Users can add new tasks to their to-do list.
- **Edit Tasks**: Users can modify existing tasks.
- **Delete Tasks**: Users can remove tasks from their to-do list.
- **Database Integration**: The application uses a MySQL database to store tasks.
- **Local Development**: It can be run on a local server using XAMPP.

## Requirements

- **PHP**: The backend logic is implemented using PHP.
- **MySQL Database**: A database is used to store tasks. The default database name is `todos`.
- **XAMPP**: XAMPP is used for local development and hosting the application.

## Getting Started

To run this application locally, follow these steps:

1. **Install XAMPP**: If you don't already have it installed, download and install XAMPP from [here](https://www.apachefriends.org/).
2. **Set Up the Database**:
   - Open XAMPP and start the Apache and MySQL servers.
   - Access phpMyAdmin via `http://localhost/phpmyadmin/`.
   - Create a new database named `todos`.
3. **Clone or Download the Repository**:
   - Clone or download this repository to your local machine.
4. **Upload the Files**:
   - Place the files inside the `htdocs` folder in your XAMPP installation directory (typically located at `C:\xampp\htdocs`).
5. **Configure Database**:
   - Ensure that the `database.php` file is configured to match your local database credentials (typically `localhost`, with the username `root` and password blank for local development).
6. **Access the Application**:
   - Navigate to `http://localhost/toDoList.php` in your browser to use the ToDo List application.

## File Structure

- **README.md**: This file with setup instructions.
- **toDoList.php**: The main file that displays the to-do list and interacts with the database.
- **database.php**: The file responsible for database connection.
- **data.php**: Handles tasks data manipulation.
- **delete.php**: Used to delete tasks from the list.
- **edit.php**: Allows editing of tasks.
- **editaction.php**: Handles the logic for updating tasks after editing.
- **src/img**: Contains images for the app.

## Developer

This project was developed by Ismail Aydemir as a personal PHP project to improve skills and understanding of PHP, MySQL, and web development practices.
