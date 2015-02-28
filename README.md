# Bookdown Project

Install via Composer:

    composer create-project bookdown/project {$PATH}
    cd {$PATH}

Generate the example project:

    php bin/bookdown.php book/bookdown.json

To browse the example project, run the built-in PHP server:

    php -S localhost:8080 -t _site/

Edit the `_site/style.css` file as you wish, or replace it entirely.

Edit the `templates/head.php` file to modify the `<head>` on all generated files. See [Aura.Html tag helpers](https://github.com/auraphp/Aura.Html/blob/develop-2/README-HELPERS.md) for tag helper information.

Edit the `book/bookdown.json` file to add your own content, including both Markdown and other `bookdown.json` files.
