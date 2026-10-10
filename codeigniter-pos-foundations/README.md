# CodeIgniter POS Foundations

This project satisfies the IT0049 activity requirements for a four-page CodeIgniter 4 POS foundation.

## Pages

- `/` — landing page
- `/about` — project explanation
- `/customers` — five customer records from a static PHP array
- `/users` — five staff records from a static PHP array

## Setup

1. Install PHP 8.0 or newer, Composer, and a local web server.
2. Create a standard CodeIgniter 4 app with `composer create-project codeigniter4/appstarter pos-foundations`.
3. Copy this folder's `app` and `public/assets` folders into the generated project, replacing matching folders.
4. Copy `.env.example` to the generated project's `.env` file.
5. Set `app.baseURL` in `.env` to `http://localhost:8080/`.
6. From the generated project folder, run `php spark serve`.
7. Open `http://localhost:8080/` in a browser and test all four links.

No database is used in this module. The customer and user arrays are temporary in-memory data sources.
