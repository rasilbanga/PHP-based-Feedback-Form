# PHP-based-Feedback-Form

You can see the WebApp at work here: [WebApp Link](http://rasilbanga.000webhostapp.com/website4/)

* [Introduction](#1---introduction)
* [Assets](#2---assets)
* [Project Usage](#3---project-usage)
* [Running The Project](#4---running-the-project)
* [Project Issues](#5---project-issues)

## 1.   Introduction

This is a PHP-Based Feedback Web Template which I created as a part of my Web Development Practice. Front-end is in HTML, Bootstrap 4 and JS and data parsing using Custom PHP. Website is hosted on 000webhost.  

Data itself is seperated on 2 seperate tables ie 

Right now It includes functionality of Logging in and Signup with required data and give some feedback using feedback form.

Design is simplistic and clean and Repsonsive and bold.

Registration and Login data is saved on Registration table
and
Feedback data is stored on different table and integrity of both tables are verified using Foriegn Keys on Feedback table.
Thus, user has to log in with their Email Id to give Feedback Data.


## 2.   Assets

Data is fetched and inserted by Custom PHP API hosted on 000webhost.


## 3.   Project Usage

1. Enter the data and Login
2. or, Click Signup and Enter data and Click "Register".
3. Enter data in feedback form and email addreess will be fetched automatically when user log in with their credentials.
4. Submit and done


## 4.   Running the Project

Clone the repository and open the 

"backend_loginService.php", 
"backend_signupService.php",
"backend_feedback.php", 
"backend_confirmation.php"

and change the following header to your liking and according to your configuration
1. $servername
2. $username
3. $password
4. $db 

To open the project, just click on "index.html" .

also, change the SQL Queries in PHP according to your data requirements.

## 5.   Project Issues

1. Application is still in experimental stage. Thus Major UI and Code changes is expected.
2. Lack of Logout button on feedback screen.
