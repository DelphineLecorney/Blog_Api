<br>
<h1 align="center">⭐️ Laravel RESTful API  ⭐️</h1>

<h2 align="center">Hi , I'm Delphine  👋</h2>  

<h3 align="center">This repository is a php exercise carried out during Becode training   </h3> <br>

<h2 align="left"><img src="https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/Overview.JPG"  height="50" width="50" /> Overview</h2> 

>This project aims to create a RESTful API using Laravel, implementing the MVC pattern (without the V - View component), and performing CRUD operations on a MySQL database using Eloquent ORM. The API will provide endpoints to manage posts data, including creating, reading, updating, and deleting posts. The data will be returned in JSON format.


The url of the API will be for example: http://localhost:8000/api/v1/posts

<h2 align="left">📦 Prerequisites</h2> 
<br>

>Before getting started with this project, you'll need the following installed on your system:

- PHP (>= 7.4)
- Composer (Dependency Manager for PHP)
- MyPHPAdmin (or any other supported database)
- Web Server (e.g., Apache, Nginx)

>Make sure you have these dependencies installed and properly configured on your machine before proceeding with the installation.
<br>
<h2 align="left">🚀 Installation</h2>

1. Clonez ce dépôt de code sur votre machine locale :


* Clone the Repository
  ```sh
    git clone https://github.com/your-username/Blog_Api.git
  ```
  
	```sh
	  cd Blog_Api
	```
* Create a database and update the .env file with your database credentials.
	```
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('body');
            $table->string('author', 255);
            $table->timestamps();
        });
    }
	```
* Install Composer dependencies using composer install.
* Generate a new application key by running php artisan key:generate.
* Run Laravel migrations to set up the required database tables using php artisan migrate.
* The API will now be accessible at http://localhost:8000/api/v1/.
<br><br>
<h2 align="left"><img src="https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/JWT.JPG"  height="50" width="50" />JWT Authentication  </h2>

>To implement an authentication system using JWT (JSON Web Tokens), you can follow these steps:

* Install the required package:
	```
	composer require tymon/jwt-auth
	```
* Publish the package configuration file:
	```
	php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
	```
* Generate a secret key for JWT:
	```
	php artisan jwt:secret
	```
* Update the .env file to configure JWT:
	```
	Update the .env file to configure JWT:
	```
* Create a new controller for handling authentication:
	```
	php artisan make:controller AuthController
	```
In this controller, implement methods for registration, login, logout, etc., using JWT for token-based authentication.

* Define routes for authentication in the routes/api.php file.
<br>
<h2 align="left"><img src="https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/Objective.jpg"  height="50" width="50" /> Objectives </h2>

- Build a RESTful API using Laravel.
- Understand and implement the MVC pattern.
- Perform CRUD operations (Create, Read, Update, Delete) on a MySQL database using Eloquent ORM.
- Validate data using Laravel's validation methods.
- Create and manage API endpoints for GET, POST, PUT, and DELETE requests.
- Return data in JSON format.
<br>

<h2 align="left"><img src="https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/Features.JPG"  height="50" width="50" /> Features</h2>
  

- GET /api/v1/posts: Retrieve all posts.
- GET /api/v1/post/:id: Retrieve a specific post by its ID.
- POST /api/v1/post: Create a new post.
- PUT /api/v1/post/:id: Update an existing post by its ID.
- DELETE /api/v1/post/:id: Delete a post by its ID
<br>
<h2 align="left">🏗️ Project Structure</h2>

```
	/api
	|-- app/                 # Laravel application files
	|-- config/              # Configuration files
	|-- database/            # Database migrations and seeds
	|-- public/              # Publicly accessible files
	|-- resources/           # Views, language files, and other resources (not used in this API)
	|-- routes/              # Route definitions and mapping
	|-- storage/             # Storage for logs and other temporary files
	|-- tests/               # Test cases (if implemented)
	|-- .env                 # Environment configuration file
	|-- .htaccess            # Apache configuration for URL rewriting (if needed)
	|-- artisan              # Laravel command-line utility
	|-- composer.json        # Composer package manager configuration
	|-- README.md            # Project README (this file)
```
<br>

* Laravel already includes its routing system, so there's no need to install a separate router package.
* Use Thunder Client (VSCode extension) or Postman to test the API endpoints and verify responses.
<br>
<h4>Pay attention to HTTP status codes (e.g., 200, 201, 400, 404, 500) to understand the API's behavior.</h4>

<!-- [![HTTP](https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/http.JPG)](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status) -->

<a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status">
  <img src="https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/http.JPG" alt="HTTP" style="max-width: 30px; max-height: 30px;" />
</a>


<h4>Status Code: 200</h4>

>Description: The request was successful, and the server has returned the requested data.
Usage in Code: Returned when a post is successfully deleted from the database. It indicates that the deletion process was successful, and the post was removed.

<h4>Status Code: 201</h4>

>The request succeeded, and a new resource was created as a result. This is typically the response sent after POST requests, or some PUT requests.

<h4>Status Code: 400</h4>

>The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing).

<h4>Status Code: 404 </h4>

>Not Found
Description: The server could not find the requested resource.
Usage in Code: Returned when attempting to delete a post with an ID that does not exist in the database. It indicates that the post was not found and, therefore, cannot be deleted.

<h4>Status Code: 500</h4>

>Description: The server encountered an unexpected condition that prevented it from fulfilling the request.
Usage in Code: Returned if there is an error during the deletion process that is not expected or handled explicitly. This could include database errors or other unexpected exceptions.

<!-- <img src="https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/http.JPG"
https://developer.mozilla.org/en-US/docs/Web/HTTP/Status alt="http" height="50" width="50" /> -->

<h2 align="left">💻 Tech Stack</h2>  

<p align='left'>
 <img src="https://github.com/DelphineLecorney/photos-images-readme/blob/main/images/Laravel.JPG" alt="laravel" height="50" width="70" />
 <img src="https://raw.githubusercontent.com/bablubambal/All_logo_and_pictures/1ac69ce5fbc389725f16f989fa53c62d6e1b4883/social%20icons/php.svg" alt="php" height="50" width="50" />
<img src="https://github.com/DelphineLecorney/Template-readme/blob/main/PICTURES_read_me_/myphpadmin.png" alt="phpmyadmin" height="60" width="60" />   
<img src="https://raw.githubusercontent.com/bablubambal/All_logo_and_pictures/62487087dc4f4f5efee637addbc67a16dd374bf6/text%20editors/vscode.svg" alt="vsCode" height="50" width="50" /> 
</p>

[<h2 align="center">Contact me</h2>](https://www.linkedin.com/in/delphine-lecorney/)




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
