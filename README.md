# 100Answers
[中文](/README_CN.md)  

A fun and interactive web application for answering 100 questions and exploring personal insights. This project allows users to engage with thought-provoking questions, submit their answers, and generate personalized pages to share their responses with others.

---

## Features

- **Categorized Questions**: Questions are grouped into categories for easy navigation.
- **Interactive Modal System**: Users can click questions to open a modal and provide their answers.
- **Nickname Input**: Users can input a nickname for their personalized pages.
- **Dynamic Page Generation**: Generate a unique page URL for each user with their responses.
- **Copyable Links**: Share the generated pages via a link.
- **Responsive Design**: Fully optimized for both desktop and mobile devices.

---

## Project Structure

```
📂 project-root
├── index.html           # Main entry point for answering questions
├── view.html            # User's personalized result display page
├── styles.css           # Stylesheet for the project
├── questions.js         # Question database
├── submit.php           # Backend script to process and store user data
├── users/               # Directory to store user-generated JSON files
│   └── [unique-code]/   # Each user's unique folder
│       └── data.json    # User's submitted answers
├── README.md            # Project documentation
```

---

## Getting Started

### Prerequisites

- A web server with PHP support (e.g., Apache, Nginx, or XAMPP).
- Modern web browser.

### Installation

1. Clone this repository or download the source code.
   ```bash
   git clone https://github.com/your-username/100Answers.git
   ```
2. Place the files in your web server's root directory.
3. Ensure the `users/` directory has write permissions for the server.
   ```bash
   chmod -R 755 users/
   ```
4. Open `index.html` in your browser to start answering questions.

---

## Usage

1. Open the application in a browser.
2. Click on a question to open the answer modal and provide your response.
3. Once finished, click the **"Generate"** button in the bottom-right corner.
4. Input your nickname and confirm to generate a personalized page.
5. Share the link to your page with others!

---

## Customization

### Adding New Questions

1. 打开 `questions.js`.
2. Add questions in the appropriate category or create new categories.

```javascript
const categories = {
    "New Category": [
        { "question": "Your new question here", "answer": "" }
    ]
};
```

### Changing Styles

编辑 `styles.css` to update the look and feel of the application. For example, modify the button styles under the `.apple-style-button` class.

### Adjusting Backend

该 `submit.php` script can be adjusted to change how user data is stored or processed. For example, you can change the folder structure or file format.

---

## Roadmap

- Add multi-language support.
- Enhance security features.
- Allow users to download their answers as a PDF.
- Implement analytics to see popular questions.

---

## Contributing

We welcome contributions! Please fork the repository and submit a pull request with your improvements.

1. Fork the repository.
2. Create a feature branch.
   ```bash
   git checkout -b feature/your-feature
   ```
3. Commit your changes.
   ```bash
   git commit -m "Add your feature"
   ```
4. Push to the branch.
   ```bash
   git push origin feature/your-feature
   ```
5. Open a pull request.

---

## License

This project is licensed under the MIT License. See `LICENSE` for more information.

---

## Acknowledgments

- **Project Inspiration**: Thanks to the idea of "100 questions" for self-discovery.
- **CSS Frameworks**: Styling inspiration from Apple-style design.

---

Enjoy using **100Answers** 和 exploring your unique self!
