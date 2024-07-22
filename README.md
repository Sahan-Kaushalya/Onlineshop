
# Online Shop

## Overview
This is a PHP-based online shopping platform that allows users to browse, search, and purchase products. The platform includes features for user authentication, product management, cart management, order processing, and administrative reporting.

## Features
- User Registration and Authentication
- Product Browsing and Advanced Search
- Shopping Cart Management
- Order History and Checkout Process
- Admin Dashboard for Product, User, and Order Management
- Reports and Analytics for Admins

## File Structure
```
Onlineshop/
│
├── adminDashboard.php           # Admin Dashboard
├── adminNavBar.php              # Admin Navigation Bar
├── adminProduct.php             # Admin Product Management
├── adminReport.php              # Admin Report Overview
├── adminReportProduct.php       # Admin Product Reports
├── adminReportStock.php         # Admin Stock Reports
├── adminReportUser.php          # Admin User Reports
├── adminSignIn.php              # Admin Sign In Page
├── adminStock.php               # Admin Stock Management
├── adminUser.php                # Admin User Management
├── cart.php                     # User Cart Page
├── connection.php               # Database Connection
├── emailBody.php                # Email Body Template
├── forgetPassword.php           # Forget Password Page
├── index.php                    # Home Page
├── invoice.php                  # Invoice Generation
├── navBar.php                   # Navigation Bar
├── orderHistory.php             # User Order History
├── productRegProcess.php        # Product Registration Process
├── profile.php                  # User Profile Page
├── resetPassword.php            # Reset Password Page
├── signIn.php                   # User Sign In Page
├── signOutProcess.php           # User Sign Out Process
├── singleProductView.php        # Single Product View Page
├── Resources/                   # Additional Resources
│
├── addtoCartProcess.php         # Add to Cart Process
├── adminSignInProcess.php       # Admin Sign In Process
├── brandRegisterProcess.php     # Brand Registration Process
├── buynowProcess.php            # Buy Now Process
├── categoryRegisterProcess.php  # Category Registration Process
├── checkoutProcess.php          # Checkout Process
├── colorRegisterProcess.php     # Color Registration Process
├── forgetPasswordProcess.php    # Forget Password Process
├── loadCartProcess.php          # Load Cart Process
├── loadChartProcess.php         # Load Chart Process
├── loadProductProcess.php       # Load Product Process
├── loadUserProcess.php          # Load User Process
├── paymentProcess.php           # Payment Process
├── profileImgUpload.php         # Profile Image Upload
├── regProductProcess.php        # Register Product Process
├── removeCartProcess.php        # Remove from Cart Process
├── resetPasswordProcess.php     # Reset Password Process
├── searchProductProcess.php     # Search Product Process
├── signInProcess.php            # User Sign In Process
├── signUpProcess.php            # User Sign Up Process
├── sizeRegisterProcess.php      # Size Registration Process
├── updateCartQtyProcess.php     # Update Cart Quantity Process
├── updateDataProcess.php        # Update Data Process
├── updateStockProcess.php       # Update Stock Process
├── updateUserStatusProcess.php  # Update User Status Process
│
├── bootstrap.css                # Bootstrap CSS
├── script.js                    # JavaScript Functions
├── style.css                    # Custom Stylesheet
│
├── Exception.php                # Exception Handling
├── OAuth.php                    # OAuth Authentication
├── PHPMailer.php                # PHPMailer Library
├── POP3.php                     # POP3 Mail Protocol
├── SMTP.php                     # SMTP Mail Protocol
│
├── testent.php                  # Test Entry Point
└── adminReportuserprint.php     # Admin User Report Print
```

## Installation
1. **Clone the Repository**
   ```sh
   git clone <https://github.com/Sahan-Kaushalya/Onlineshop.git>
   ```
2. **Navigate to the Project Directory**
   ```sh
   cd Onlineshop
   ```
3. **Set Up the Database**
   - Import the provided SQL file into your MySQL database.
   - Update the `connection.php` file with your database credentials.

4. **Configure Email**
   - Update `PHPMailer.php`, `SMTP.php`, and other related files with your email server details.

5. **Run the Application**
   - Deploy the application on a local or remote server with PHP and MySQL support.

## Usage
- **User Registration and Login**
  - Visit the homepage and sign up for a new account or log in with existing credentials.
- **Browse Products**
  - Use the navigation bar to browse and search for products.
- **Add to Cart and Checkout**
  - Add desired products to the cart and proceed to checkout.
- **Admin Panel**
  - Admin users can log in to the admin panel to manage products, users, and view reports.

## Contributing
1. Fork the repository
2. Create your feature branch (`git checkout -b feature/YourFeature`)
3. Commit your changes (`git commit -m 'Add some feature'`)
4. Push to the branch (`git push origin feature/YourFeature`)
5. Open a pull request

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments
- [PHPMailer](https://github.com/PHPMailer/PHPMailer) for email handling
- [Bootstrap](https://getbootstrap.com/) for the frontend framework
