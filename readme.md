# Mecha Mailer #
## Quick Description ##
A web-based application for distributing advertisement mails, tailored to the specific needs of gamehoster company.

## Full Description ##
Mecha Mailer simplifies the process of aquiring gamer-clan clients, which is a common task any game hoster company.

The application features the following functions:

* Specify clan-name, clan-tag and contact address with automatic duplicate and similarity check
* Edit or the delete the information of specific clans
* Send a standard or custom mail to the specified clans. Names of the receiving clan and a signature of the sending person are automatically added to the mail. 
* All in a single slick web-interface

## Development environement ##
To start the application locally in the development environment:

* Execute StartDevelopmentServers.bat This starts a local PHP and MySQL Server.
* Open the address http://localhost:5723 in your webbrowser

## Productive environment ##
To start the application in a productive environement

* Execute Setup\DatabaseSetup.sql on your productive MySQL database
* Copy the files in the \Application folder to your productive PHP folder
* Enter your productive database credentials into Application\util\dblogin.php
