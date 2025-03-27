# Gegi Theme  

A custom WordPress theme for [Gegi.ro](https://gegi.ro/), based on [_s (Underscores)](https://underscores.me/) and styled with Tailwind CSS.  

## 🚀 Installation & Compilation  

1. **Clone the repository**  
   ```sh
   git clone https://github.com/bogdiw/gegi-theme.git  
   cd gegi-theme
   ```  

2. **Install dependencies (if needed)**  
   ```sh
   npm install
   ```  

3. **Compile Tailwind CSS**  
   ```sh
   npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
   ```  

4. **Activate the theme**  
   - Upload the theme folder to your WordPress installation (`wp-content/themes/`).  
   - Activate it from the WordPress admin panel under **Appearance > Themes**.  

## 🎨 Customization  

- Modify styles in `./src/input.css` and recompile using the Tailwind command above.  
- Customize theme templates in the appropriate PHP files.  

## 📜 License  

This theme is open-source and available under the [MIT License](LICENSE).  
