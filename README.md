# Task 4 – Security Enhancement Module

This task focuses on improving the security, authentication, and protection mechanisms of the SmartBlog Pro web application.

The application is enhanced with advanced security techniques to protect user data, authentication sessions, and database operations from vulnerabilities and unauthorized access.

---

# Objectives

- Secure user authentication
- Protect passwords using hashing
- Prevent unauthorized access
- Improve session security
- Validate user inputs
- Protect database operations
- Enhance overall application security

---

# Security Features Implemented

## 1. Password Hashing

Passwords are encrypted using PHP password hashing.

### Example

```php
$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);