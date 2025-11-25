# Homelock Services Website

A Laravel-based website for a company providing Security Guards, Cleaning Services, and Fire Extinguisher Sales.

## Features

### Public Frontend
- **Homepage**: Professional landing page with service overview
- **Security Services**: Detailed page with quote request form
- **Cleaning Services**: Service details with quote request form
- **Fire Extinguishers**: Product catalog with inquiry modal
- **Contact Page**: General contact form
- **Responsive Design**: Bootstrap-powered responsive layout

### Admin Backend
- **Secure Login**: Authentication system for administrators
- **Dashboard**: Overview of recent requests and statistics
- **Request Management**: View all quote/inquiry requests
- **Request Details**: Detailed view of individual requests

## Technology Stack

- **Backend**: Laravel (latest stable version)
- **Frontend**: Bootstrap 5 + Blade templates
- **Database**: MySQL (configurable)
- **Authentication**: Laravel's built-in authentication

## Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js & NPM (optional, for asset compilation)

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd Homelock_System
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup**
   ```bash
   # Run migrations to create tables
   php artisan migrate
   
   # Seed database with admin user
   php artisan db:seed
   ```

5. **Start the development server**
   ```bash
   php artisan serve
   ```

6. **Access the application**
   - **Public Site**: http://localhost:8000
   - **Admin Panel**: http://localhost:8000/admin
   - **Admin Login**: admin@homelock.com / password123

## Database Structure

### Users Table
- Standard Laravel users table for admin authentication

### Requests Table
- `id`: Primary key
- `name`: Client name
- `email`: Client email
- `phone`: Client phone number
- `company_name`: Company name (optional)
- `service_type`: Type of service (security, cleaning, fire_extinguisher, contact)
- `message`: Client message/requirements
- `product_interest`: Specific product for fire extinguisher inquiries
- `created_at`, `updated_at`: Timestamps

## File Structure

```
app/
├── Http/Controllers/
│   ├── AppController.php      # Public pages controller
│   └── AdminController.php    # Admin panel controller
└── Models/
    ├── User.php              # User model
    └── Request.php           # Request model

resources/views/
├── layouts/
│   ├── app.blade.php         # Public layout
│   └── admin.blade.php       # Admin layout
├── admin/
│   ├── dashboard.blade.php   # Admin dashboard
│   ├── requests.blade.php    # All requests listing
│   └── request-details.blade.php # Request details
├── home.blade.php            # Homepage
├── security.blade.php        # Security services
├── cleaning.blade.php        # Cleaning services
├── fire-extinguishers.blade.php # Fire extinguisher products
└── contact.blade.php         # Contact page

routes/
└── web.php                   # All application routes

database/migrations/
├── *_create_users_table.php  # Users table
└── *_create_requests_table.php # Requests table
```

## Usage

### For Clients (Public)
1. Visit the homepage to learn about services
2. Navigate to specific service pages
3. Fill out quote request forms
4. Submit inquiries for fire extinguisher products
5. Use the contact form for general inquiries

### For Administrators
1. Login at `/admin` with provided credentials
2. View dashboard for recent activity overview
3. Access all requests via "All Requests" menu
4. Click "View Details" to see full request information
5. Use the information to follow up with clients

## Customization

### Adding New Products
Edit the `fireExtinguishers()` method in `AppController.php` to add/modify fire extinguisher products.

### Styling Changes
Modify Bootstrap classes in Blade templates or add custom CSS.

### Email Notifications
Implement Laravel's mail system to send notifications when new requests are submitted.

## Security Notes

- Admin registration is disabled by default
- Change default admin credentials after setup
- Configure proper database credentials for production
- Set up HTTPS for production deployment
- Review and update `.env` file for production settings

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
