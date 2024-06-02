<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Link to github:
https://github.com/Braedon0000/BlogApplication/tree/master

## What was used
•	Laravel
•	Breeze
•	Bootstrap
•	Blade
•	MySQL

## Setup:
•	First, I began with creating a new project with Laravel using gitbash. 
•	After I then ran php my artisan serve to get a server for the project and run it on google 
•	After I created my migrations for my database adding tables for images, bio and posts and comments. 
•	I then used php artisan make model to create models and controllers for my posts and comments. 

## Functionality
•	I began by starting with the dashboard which is the first thing you see after you login or register. I started by creating routes on the web. Php file as well as creating my methods for creating and commenting posts in the controllers I created.
•	I then added more authentication into the posting commenting by making it so that if you are not a registered user you have to login to be able to make posts and comment. 
•	There is functionality in place for email verification.
•	There is also functionality in place so that you are able to upload a profile picture this was done by adding a authentication controller to make it easier for my self and using php artisan storage: link which made it possible to save the uploaded picture in the project on the local computer that is being used 
•	You are also able to edit your bio and your profile picture. 
•	You are able to post and comment as a user and you are also able to perform the basic crud operations on those posts. 
Front end
•	For the front end I used blade and boot strap for the UI and design of the webpage 
•	I used bootswtches vapor theme as the theme of the website and changed some of the text so that it flows very nicely when it comes to the design. 

## Usage
•	You will first need to login into the system by navigating to the nav bar on the top of the page where you will be able to either register or login.
•	For registration you will be required to enter your name, email and password. 
•	For login you are required to enter your email and password
•	After successfully logging into your account, you will then be able to see all of the current post comments or post on them. 
•	After posting a comment you can click on the view button where you are able to see all the post on a single page
•	You are also able to click on the edit button which will allow you to edit the posts that you have made. There is authentication in place that doesn’t allow you to edit other people's posts.
•	You are able to delete posts as well by clicking the X.
•	You are then able to navigate to your username in the top right corner that displays your name and then you will be redirected to a profile page that will display options to edit your profile. 
•	You are able to upload an image or change the one that’s there. 
•	You are able to update your bio as well.
•	On the profile page all of your posts will also be displayed 

















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
