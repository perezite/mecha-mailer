# Mecha Mailer #
## Quick Description ##
A web-based application for distributing advertisement mails, tailored to the needs of a gamehoster company.

## Full Description ##
Mecha Mailer simplifies the process of aquiring gamer-clan clients by advertisement mails.

The application features the following functions:

* Specify the contact data of a targetted clan (clan-name, clan-tag and contact address), including duplicate and similarity check
* Edit or the delete the information of specific clans
* Send a standard or custom mail to the specified clans. The name of the receiving clan and a signature of the sending person is automatically added to the mail. 
* A slick PHP web interface

## Development environement ##
To start the application locally for development:

* Execute StartDevelopmentServers.bat This starts a local PHP and MySQL Server.
* Open the address http://localhost:5723 in your webbrowser

## Productive environment ##
To start the application in a productive environement:

* Execute Setup\DatabaseSetup.sql on your productive MySQL database
* Copy the files in the \Application folder to your productive PHP web-folder
* Enter your productive database credentials into Application\util\dblogin.php
