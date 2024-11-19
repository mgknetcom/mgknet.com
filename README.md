# MGKnet - WordPress & E-Commerce Solutions

A professional website showcasing WordPress development and E-Commerce consultancy services. Built with PHP, Tailwind CSS, and modern web technologies.

## 🛠 Tech Stack

- **Frontend**
  - HTML5
  - Tailwind CSS
  - JavaScript (Vanilla)
  - SVG Animations
  
- **Backend**
  - PHP

## 🚦 Getting Started

1. **Prerequisites**
   - PHP 8.0 or higher
   - Web server (Apache/Nginx)

2. **Installation**

   ```bash
   # Clone the repository
   git clone https://github.com/yourusername/mgknet.com.git
   
   # Navigate to project directory
   cd mgknet.com
   
   # Install dependencies
   npm install

   ```

3. **Configuration**
   - Update `config/projects.php` with your portfolio projects
   - Update `config/solutions.php` with your service offerings
   - Modify meta tags in `header.php` for SEO optimization

## Useful Commands

- Continuously watch for changes in the `style.css` file, updating the output file whenever changes occur.

```bash
npx tailwindcss -i ./assets/style.css -o ./assets/style.min.css --watch
```

* Generate a minified version of the CSS

```bash
npx tailwindcss -o ./assets/style.min.css --minify 
```

* Build the application

```bash
npm run package
```

## 🔧 Development

The project uses a modular structure:

- `layouts/` contains reusable page structures
- `sections/` contains individual page sections
- `config/` contains data configuration files
- `includes/` contains partial components

## 🎨 Customization

1. **Colors**
   - Primary gradient: `from-blue-500 to-indigo-500`
   - Background: `bg-white` and `bg-gray-50`
   - Text: Various gray scales for hierarchy

2. **Typography**
   - Primary font: Poppins (preloaded for performance)
   - Responsive text sizing
   - Custom gradient text effects

## 📄 License

This project is protected under copyright law. All rights reserved.

## 📞 Contact

For inquiries, please contact:

- Email: <contact@mgknet.com>

---

© 2020-2024 MGKnet. All rights reserved.
