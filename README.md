# Project: Vivid Events

**Vivid Events** is a Laravel-based event management and showcase web application. This project demonstrates how to create a single-table, database-driven web application using Laravel’s MVC architecture, Blade templating engine, and essential Laravel features like Eloquent ORM and route controllers.

The application simulates a real-world event management company by enabling an administrator to manage a variety of event types. It features a structured and clean interface that adheres to good design practices and usability principles for desktop viewing.

---

## Scenario Overview

The project scenario is based on a fictional company, **Vivid Events**, which specializes in organizing and promoting various types of events including personal, corporate, non-profit, and public functions. The application allows users (in this case, the admin) to add, view, update, and delete events from a single normalized database table.

The frontend includes a landing welcome page followed by a dashboard that lists events. Customers can browse events on a gallery page, where pagination ensures performance and ease of navigation. Although reviews and bookings are not implemented yet, they are envisioned for the future in Assignment 2.

The system is styled with custom CSS for desktop resolution (1366x768), and usability best practices such as color contrast, navigation consistency, and readable font sizes have been followed.

---

## Key Features Implemented

- Built with Laravel and MySQL
- Uses one normalized database table for event data
- Migration and seeder files for easy database setup
- Full CRUD operations (Create, Read, Update, Delete)
- Pagination for gallery/event listings
- Form validation using Laravel’s built-in validation features
- Clean layout and view separation using Blade templating
- Manual CSS styling without any frameworks or JavaScript
- Persistent navigation bar and informative footer

All features comply strictly with the assignment rules. No JavaScript, CSS frameworks, or login systems have been used. The application sticks to Laravel’s core components and emphasizes basic web development principles.

---

## Additional Laravel Concepts Used

The application includes deeper Laravel concepts within allowed scope:

- `Route::resource()` simplifies the routing for CRUD operations.
- Eloquent ORM used for database queries and pagination.
- Blade directives like `@csrf`, `@foreach`, `@method`, and `@error` are used for secure and readable templating.
- Data is passed to views using the `compact()` method for better code clarity.
- Pagination is implemented through `Event::latest()->paginate(4)`.
- The landing (welcome) page is shown on load using `Route::view('/')`, and the admin dashboard is moved to `/home` for separation.

These implementations show a solid grasp of Laravel fundamentals and good development practices.

---

