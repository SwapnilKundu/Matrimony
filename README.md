# Matrimony Platform

A modern, comprehensive matrimony (marriage matching) web application built with **Laravel 10**, designed to connect individuals seeking life partners. This platform provides a secure and user-friendly environment for matrimonial services.

## 🎯 Features

- **User Registration & Profiles**: Create and manage detailed matrimonial profiles
- **Profile Matching**: Smart matching algorithm to suggest compatible profiles
- **Search & Filters**: Advanced search with multiple filter criteria
- **Interest Management**: Send, receive, and manage profile interests
- **Messages**: Direct messaging between matched users
- **Notifications**: Real-time alerts for matches, messages, and profile views
- **Profile Verification**: Two-step verification for account security
- **Premium Features**: Optional subscription-based premium functionalities
- **Admin Dashboard**: Comprehensive admin panel for platform management

## 📋 Tech Stack

- **Backend**: Laravel 10.x
- **Frontend**: JavaScript, Blade Templating, Vue.js components (optional)
- **Styling**: CSS, Tailwind CSS
- **Database**: MySQL
- **Authentication**: Laravel Sanctum API (for token-based auth)
- **Mail Service**: SMTP/Mailpit for email notifications
- **Real-time**: Pusher (optional, for real-time notifications)
- **Build Tool**: Vite

## 🚀 Getting Started

### Prerequisites

- PHP 8.1+
- Composer
- MySQL 5.7+ or MariaDB
- Node.js & npm (for frontend assets)

### Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/SwapnilKundu/Matrimony.git
   cd Matrimony
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure Database**
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=matrimony
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Seed Database (Optional)**
   ```bash
   php artisan db:seed
   ```

7. **Build Frontend Assets**
   ```bash
   npm run build
   ```

8. **Start Development Server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## 📁 Project Structure

```
├── app/                      # Application logic
│   ├── Http/Controllers/     # API and web controllers
│   ├── Models/              # Eloquent models
│   └── Services/            # Business logic
├── database/
│   ├── migrations/          # Database migrations
│   ├── seeders/             # Database seeders
│   └── factories/           # Model factories
├── resources/
│   ├── views/              # Blade templates
│   └── js/                 # JavaScript components
├── routes/                 # API and web routes
├── public/                 # Public assets
├── storage/                # File storage
├── tests/                  # Unit and feature tests
└── config/                 # Configuration files
```

## 🔧 Configuration

### Key Configuration Files

- `config/app.php` - Application settings
- `config/database.php` - Database configuration
- `config/mail.php` - Mail/SMTP settings
- `config/sanctum.php` - API authentication

### Environment Variables

Key environment variables to configure:

```env
APP_NAME=Matrimony
APP_ENV=production
APP_DEBUG=false
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=matrimony

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password

# Optional: For real-time features
PUSHER_APP_ID=your-pusher-id
PUSHER_APP_KEY=your-pusher-key
```

## 📚 API Endpoints

### Authentication
- `POST /api/register` - User registration
- `POST /api/login` - User login
- `POST /api/logout` - User logout

### Profiles
- `GET /api/profiles` - List all profiles
- `GET /api/profiles/{id}` - Get profile details
- `PUT /api/profiles/{id}` - Update profile
- `DELETE /api/profiles/{id}` - Delete profile

### Interests
- `POST /api/interests` - Send interest
- `GET /api/interests` - Get user interests
- `PUT /api/interests/{id}` - Update interest status

### Messages
- `POST /api/messages` - Send message
- `GET /api/messages/{id}` - Get conversation

## 🧪 Testing

Run the test suite:

```bash
php artisan test
```

For specific test file:

```bash
php artisan test tests/Feature/AuthTest.php
```

## 📝 Database Migrations

Create a new migration:

```bash
php artisan make:migration create_table_name
```

Run migrations:

```bash
php artisan migrate
```

Rollback migrations:

```bash
php artisan migrate:rollback
```

## 🔐 Security

- All passwords are hashed using bcrypt
- CSRF protection enabled on all forms
- SQL injection prevention through Eloquent ORM
- XSS protection via Blade templating
- Rate limiting on API endpoints
- Two-factor authentication support

## 📦 Available Commands

```bash
# Development
php artisan serve              # Start development server
npm run dev                    # Start Vite dev server
npm run build                  # Build production assets

# Database
php artisan migrate            # Run migrations
php artisan db:seed           # Seed database
php artisan tinker            # Interactive shell

# Code Quality
./vendor/bin/pint             # Format code with Pint
php artisan test              # Run tests
```

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

Please ensure your code follows PSR-12 standards and includes appropriate tests.

## 📄 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🆘 Support

For support, email your inquiry or open an issue in the GitHub repository.

## 🙏 Acknowledgments

- Built with [Laravel](https://laravel.com)
- Icons from [Font Awesome](https://fontawesome.com)
- Thanks to all contributors

---

**Last Updated**: May 2024

For more information, visit the [GitHub Repository](https://github.com/SwapnilKundu/Matrimony)
