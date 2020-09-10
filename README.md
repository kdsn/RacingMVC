# RacingMVC
RacingMVC is a simple lightweight MVC framework, build with Test Driven Development ( TDD ).<br>
The build in QueryBuilder uses PDO and prepared statements.


## SETUP
### Set domain variable
In /.htaccess set the domain variable ( edit racingmvc.local to yourdomain.tld )
### Set config variables
in /app/core/config.php insert your database credentials

See the [Wiki page](https://github.com/kdsn/racingmvc/wikis/home) for further setup instruction, and information.

## What was used

For this project PHPUnit were used for unit testing. .htaccess for mapping the site to the public folder, and sends the params to the $_GET['url'] variabel. <br>
Also a custom Router and a custom QueryBuilder were made for this framework.  

Development environment: MAMP Pro på MacOS.<br>
Test enviroment: CentOS 7.5 linux server with cPanel.

##Requierments

This framework is tested on a system running php 7.3 & MySQL 5.7

This framework is intended as a base for Test Driven MVC development.
