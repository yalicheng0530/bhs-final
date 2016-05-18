 Name of project: WordPress Final BHS 

 Description of project: This is a costomer theme created and post on to WordPress.

 Installation Instructions For Local Development with WordPress

 1. Clone Repo 
    
    https://github.com/yalicheng0530/final-bhs/wp-content/themes/yl-bhs/.git

2. Install WP-CLI

Install WP-CLI so you can install WordPress from the Terminal. You should have this installed. If not, read the [wp-cli.md](https://github.com/kingluddite/web-dev-notes/blob/master/wordpress/wp-cli.md)

3. Install WordPress Core

```
$ wp core download
```

That will install WordPress core but you will still have your wp-content folder with your themes folder nested inside and with your custom theme nested inside the themes folder.

4. Start MAMP

Make sure your local server and mysql are running. For this example I'll assume you are using MAMP. Make sure Apache and MySQL are running.

* I like to change my DocumentRoot to `~/Sites`
* I like to remove port `8888` and use default http port so I only have to use `localhost` instead of ``localhost:8888``

5. Create Empty Database

Use MAMP's phpMyAdmin to create an empty database.

* please use underscores and not dashes when naming your database.
    - my-database-name (bad database name)
    - my_database_name (good database name)

WordPress will use this database for it's installation.

6. Create wp-config.php

Use WP-CLI to create your wp-config.php.

This is your important WordPress configuration file with your database connection information (and other important configuration settings).

```
$ wp core config --dbuser=root --dbpass=root --dbname=your_db_name
```

**note:** For MAMP the default user and password is `root`
Make sure to change the database name to the name of your empty database you just created using phpMyAdmin.

7. Finish up WordPress Install

```
$ wp core install --url=http://localhost/folder-name-here --title=YourSiteNameNoSpaces --admin_user=admin --admin_password=password --admin_email=youremail@someemail.com
```

This will create the tables and content of your WordPress install.
* I use `admin` as default user login
* I use `password` as default user password
* Make sure the folder you cloned from github is inside the `Sites` folder and you add this folder name to the end of `http://localhost/PUTHERE`

8. Change Theme

Change theme to your custom WordPress theme.

```
$ wp theme activate your-theme-name-here
```

9. Create Sublime Text Project file

Create a project file in Sublime Text that will enable you to see both the Core WordPress files and the custom theme.

10. Remove themes

See if you can remove the twentyfifteen and twentyfourteen themes using WP-ClI

11. Add Plugins

See if you can install and active a plugin using WP-CLI

12. Install Project Dependencies

Browse to your custom theme folder and type this in your Terminal

```
$ npm install
```

That should install all the dependencies we have listed in our custom theme's `package.json` file (we just have `bootstrap`).

13. View Your Masterpiece

View Your WordPress project (through the eyes of your custom theme)

# Congratulations!

Tasks (100 total points)


 [*]  Turn on computer (29pts)
 [*] Create a local WordPress install inside `Sites` (1pt)
 [*] Have `Git` working on your local site. (1pt)
 [*] Create a remote `GitHub` repository (1pt)
* [ ] Your project has a `README.md` that includes: (5pts)
    * [ ] Name of project
    * [ ] Description of project
    * [ ] Installation Instructions
    * [ ] Bullet list of all tasks completed for final project
    * [ ] Proper use of markdown must be used in `README.md`
* [ ] URL of final project on github emailed to instructor (1pt)
 [*] Functional `.gitignore` in root of WordPress project (1pt)
* [ ] At least 20 `Git` commits have been made. (1pt)
 [*] Create database using MAMP (1pt)
 [*] Proper naming convention of files, folders (1pt)
 [*] Create a custom theme folder with necessary files (5pts)
* [ ] Migrate local development site to staging server (3pts)
    * [ ] Use `FTP` program like `Filezilla`
    * [ ] Set up remote database
    * [ ] Install and use `WP-CLI` on staging server
* [ ] Install the following plugins: (4pt)
     [*] activate and use `Contact Form 7` plugin
     [*] `Yoast SEO`
    * [ ] `WordFence`
    * [ ] add screenshot of list of plugins using `WP-CLI` to `README.md`
 [*] Delete all themes except your custom theme and WordPress `twentysixteen` theme using `WP-CLI` (1pt)
 ! [link to screenshot](https://i.imgur.com/dEQjwUa.png)
    * [ ] add screenshot of list of themes using WP-CLI to `README.md`
* [ ] Use `Twitter Bootstrap` for grid/layout (1pt)
 [*] Use `WP-CLI` to install locally (1pt)
* [ ] Create `Sublime Text` project file with core and theme (1pt)
   * [ ] add screenshot in `README.md`
* [ ] Add `screenshot.png` with correct size dimensions for custom theme (1pt)
* [ ] Use `Sass` on project (1pt)
* [ ] Use `Gulp` on project (1pt)
* [ ] Convert PSD into `HTML` and `CSS` (5pts)
* [ ] Create a Blog page (1pt)
* [ ] Create 10 posts (1pt)
* [ ] Style Blog page (1pt)
* [ ] Create a singular page to show full post (1pt)
* [ ] Make permalinks SEO friendly (1pt)
* [ ] Add a functional widget (1pt) 
* [ ] Add a menu using `functions.php` (1pt)
* [ ] Add CSS and JavaScript using `funtions.php` (1pt)
* [ ] Add full width layout (1pt)
* [ ] Add two column layout (1pt)
* [ ] Create two different sidebars on two different layouts (1pt)
* [ ] Create 3 categories (1pt)
* [ ] Have comments on posts (1pt)
* [ ] Add working form (1pt)
* [ ] Style form to match design (1pt)
* [ ] Style navbar to match design (1pt)
* [ ] Create categories page (1pt)
* [ ] Style categories page (1pt)
* [ ] Create archives page (1pt)
* [ ] Stye archives page (1pt)
* [ ] Add favicon (1pt)
* [ ] Add a dynamic copyright using PHP (1pt)
* [ ] Hava a static front page (1pt)
* [ ] Add Debug code to `wp-config.php` (1pt)
* [ ] Add 3 users with different permissions (1pt)
* [ ] Backdate 1 post (1pt)
* [ ] Add categories to posts (1pt)
* [ ] Add special comment to `style.css` (1pt)
* [ ] Create a page using a different template (1pt)
 [*] Have `package.json` file with dependencies used in project (1pt)
* [ ] Make site responsive (1pt)
* [ ] Add an image via upload in WordPress and show image on post (1pt)
* [ ] Add logo image to `front-page.php` (1pt)
* [ ] Use font-awesome (1pt)
* [ ] Use Custom Post Types (1pt)
