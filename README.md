# Portfolio Projects CRUD Application

This is a simple Laravel CRUD application to manage portfolio projects, built using Laravel 12 with MVC structure, form handling, and MySQL database operations. The application allows users to create, view, edit, and delete projects, with each project including a title, description, URL, image, and status. The project details page displays the image on the left and the description, URL, and status on the right within a single bordered container.

## Laravel Version

- **Laravel**: 12.x

## Setup Instructions

1. **Clone the Repository**:

   ```bash
   git clone <repository-url>
   cd portfolio-app
   ```

2. **Install Dependencies**:

   ```bash
   composer install
   ```

3. **Set Up Environment**:

   - Copy `.env.example` to `.env`:

     ```bash
     cp .env.example .env
     ```

   - Update `.env` with your database credentials:

     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=portfolio_db
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Generate Application Key**:

   ```bash
   php artisan key:generate
   ```

5. **Create Database**:

   - Create a MySQL database named `portfolio_db`.

6. **Run Migrations**:

   ```bash
   php artisan migrate
   ```

7. **Set Up Storage Link**:

   - Create a symbolic link for file storage:

     ```bash
     php artisan storage:link
     ```

8. **Start the Development Server**:

   ```bash
   php artisan serve
   ```

9. **Access the Application**:

   - Open `http://localhost:8000/projects` in your browser to view the project list.

## Database

- **Database Name**: `portfolio_db`
- **Table**: `projects`
- **Fields**:
  - `id`: Auto-incrementing primary key
  - `title`: String (required)
  - `description`: Text (optional)
  - `url`: String (optional)
  - `image`: String (path to stored image, required)
  - `status`: Enum ('draft', 'published')
  - `created_at`, `updated_at`: Timestamps

## Additional Notes

- **Frontend**: The application uses Bootstrap 5 (via CDN) for a clean and functional UI. The project details page (`show.blade.php`) displays the image on the left and the description, URL, and status on the right, all within a single Bootstrap card.
- **File Storage**: Images are stored in `storage/app/public/images` and accessible via `public/storage/images`. Ensure the `storage` and `public/storage` directories have write permissions.
- **Validation**: Form inputs are validated, including image uploads (supported formats: jpeg, png, jpg, gif; max size: 2MB).
- **Testing**: Test CRUD operations by creating, viewing, editing, and deleting projects. Verify that images are correctly uploaded and deleted, and check the project details page for the updated layout.
- **Dependencies**: Requires PHP 8.2+, Composer, and MySQL. Ensure these are installed before setting up the project.
