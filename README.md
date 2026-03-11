# Neraj Lal - Personal Portfolio

A personal portfolio website built to showcase my skills, experience, and projects. 

## 🚀 Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Styling:** [Tailwind CSS](https://tailwindcss.com/)
- **Templating/Backend:** PHP (used for component-based architecture and partials)

## 📁 Project Structure

The project is structured into logical components using PHP partials to keep the `index.php` clean and maintainable.

```text
├── index.php                 # Main entry point of the website
├── partials/                 # PHP partials for different sections
│   ├── _navigation.php       # Header & Navigation bar
│   ├── _hero.php             # Hero section
│   ├── _about.php            # About Me section
│   ├── _skills.php           # Skills section
│   ├── _experience.php       # Experience section
│   ├── _projects.php         # Projects section
│   ├── _contact.php          # Contact form / Contact info
│   └── _footer.php           # Footer
├── public/                   # Static assets
│   ├── css/                  # Compiled styles and input CSS
│   ├── js/                   # JavaScript files
│   └── assets/               # Images and other static files
└── tailwind.config.js        # Tailwind CSS configuration file
```

## 🛠️ How to Run Locally

Since this project uses PHP for its templating, you will need a local PHP server to run it. 

### Prerequisites
- PHP installed on your machine.
- (Optional) Node.js and npm if you plan to recompile Tailwind CSS.

### Steps to Run

1. **Clone the repository:**
   ```bash
   git clone https://github.com/nerajlal/nerajlal-profile.git
   cd nerajlal-profile
   ```

2. **Start the PHP Development Server:**
   You can easily spin up a local server using PHP's built-in server. Run the following command in the root of the project:
   ```bash
   php -S localhost:8000
   ```

3. **View the website:**
   Open your browser and navigate to `http://localhost:8000`

### Tailwind CSS Development (Optional)
If you want to modify the Tailwind utility classes or styles, you can recompile the CSS (assuming you have Tailwind CSS CLI installed globally or locally):
```bash
npx tailwindcss -i ./public/css/input.css -o ./public/css/style.css --watch
```

## 📄 License

This project is open-source and available for normal use.
