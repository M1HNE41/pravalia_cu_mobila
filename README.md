
# Prăvălia cu Mobilă

**A Web Application for Furniture Sales and Services**  
Developed by Mihnea Petcu as part of the Informatics Atestat Project.

## Table of Contents
- [About the Project](#about-the-project)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup and Installation](#setup-and-installation)
- [Database Schema](#database-schema)
- [Security Measures](#security-measures)
- [Analytics and Optimization](#analytics-and-optimization)
- [Accessing Project Images](#accessing-project-images)
- [Acknowledgments](#acknowledgments)

---

## About the Project

"Prăvălia cu Mobilă" is an innovative web application designed to provide an accessible and user-friendly platform for purchasing and exploring furniture. The project aims to:
- Innovate in the underdeveloped online furniture domain.
- Offer additional services such as furniture restoration, interior design consultation, and custom furniture design.
- Enhance user experience through high-quality, accessible, and diverse services.

---

## Features

### 1. **User Management**
- User registration and login pages.
- Secure session handling using PostgreSQL.

### 2. **Product Management**
- Categorized furniture pages for bedrooms, living rooms, kitchens, and bathrooms.
- Detailed product cards showcasing images, descriptions, prices, and dimensions sourced from the database.

### 3. **Database Integration**
- Centralized user, product, and session management using Supabase.

### 4. **Secure User Sessions**
- Unique session identifiers.
- Logout functionality for controlled session termination.

### 5. **Hosting and Deployment**
- Hosted using [Vercel](https://vercel.com/) and code managed with [GitHub](https://github.com/).

---

## Technologies Used

### Frontend
- **HTML**: Structure and content.
- **CSS**: Styling and responsive design.
  
### Backend
- **PHP**: Server-side scripting and database interaction.
- **Supabase**: Database and authentication.

### Hosting and Tools
- **Vercel**: Web hosting.
- **GitHub**: Version control and deployment pipeline.

---

## Setup and Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-repository-url.git
   ```

2. Configure database:
   - Ensure Supabase is set up with a PostgreSQL database.
   - Import the schema from the `database.sql` file in the repository.

3. Set up environment variables:
   - Define database connection settings in `db_connect.php`.

4. Deploy to Vercel:
   - Push your changes to GitHub, and Vercel will handle the deployment.

5. Test locally:
   ```bash
   php -S localhost:8000
   ```

---

## Database Schema

### Tables:
- **Users**: Stores user details such as username, email, and passwords.
- **Products**: Information about furniture items.
- **Sessions**: Tracks active user sessions for security.

---

## Security Measures

- **Prepared Statements**: Prevent SQL injection.
- **Session Management**: Ensures unique and secure sessions for users.
- **DDoS Protection**: Leveraged Vercel's firewall and challenge modes.

---

## Analytics and Optimization

### Performance
- Monitored using Vercel's analytics tools.
- Optimized image and media resources.

### Compatibility
- Fully responsive design for both desktop and mobile platforms.

---

## Accessing Project Images

All images related to the project (e.g., website screenshots, diagrams) are located in the `images` folder within the repository.

### Example of Images:
- Screenshot of the main page:
  ![Main Page](images/image1.png)
- Screenshot of the user login page:
  ![Login Page](images/image2.png)

For additional images, check the `images` folder in the repository.

---

## Acknowledgments

- **Documentation References**:
  - [PHP.net](https://www.php.net/docs.php)
  - [MDN Web Docs](https://developer.mozilla.org/en-US/docs/Web/CSS)
  - [W3Schools](https://www.w3schools.com/)
- **Hosting and Database**:
  - [Vercel](https://vercel.com/docs)
  - [Supabase](https://supabase.com/docs)
- **Other Tools**:
  - [Google Fonts](https://fonts.google.com/)

---

## License

This project is for educational purposes and is not intended for commercial use.
