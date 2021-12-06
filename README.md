# Damn Vulnerable Web Services

**NOTE: This project is out of date, please use https://github.com/snoopysecurity/dvws-node**


Damn Vulnerable Web Services is an insecure web application with multiple vulnerable web service components that can be used to learn real world web service vulnerabilities. The aim of this project is to help security professionals learn about Web Application Security through the use of a practical lab environment.



![DVWS](http://snoopysecurity.github.io/img/dvws.png)

This application includes the following vulnerabilities.

+ WSDL Enumeration
+ XML External Entity Injection
+ XML Bomb Denial-of-Service
+ XPATH Injection
+ WSDL Scanning
+ Cross Site-Tracing
+ OS Command Injection
+ Server Side Request Forgery
+ REST API SQL Injection
+ Same Origin Method Execution
+ JSON Web Token (JWT) Secret Key Brute Force
+ Cross-Origin Resource Sharing



# Instructions
DVWS can be used with a XAMPP setup. XAMPP is a free and open source cross-platform web server solution which mainly consists of an Apache Web Server and MySQL database. To setup, download and install the XAMPP setup first. Next, download the dvws folder and copy the folder to your htdocs directory. Lastly, Setup or reset the database by going to http://localhost/dvws/instructions.php

Note: PHP 5.5.38 is required for most of the exercises to work correctly.

# Disclaimer
Do not host this application on live or production environment.

# Copyright
This work is licensed under GNU GENERAL PUBLIC LICENSE Version 3
To view a copy of this license, visit http://www.gnu.org/licenses/gpl-3.0.txt

# To Do list

+ JSON Hijacking
+ SOAP Injection
+ XML Injection
