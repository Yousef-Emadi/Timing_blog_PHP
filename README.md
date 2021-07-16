# Subject: Timing blog, PHP test project 2
# by: Yousef Emadi
# 16-july-2021
# PHP, Composer, MySQL, CSS, Bootstrap, HTML


A user must be log in to view random quotes, but a user is only allowed to be logged in for a
maximum of 2 minutes, at which point they are logged out.
A user that is logged but has exceeded its 2 minute limit should be logged out and redirected to
the login page. (NOTE THIS ONLY HAPPENS WHEN THE PAGE LOADS!!!! If time expires
while the user in on the page, nothing happens)

Login - login.php
• A user that is logged in should be redirected to the Home (index.php)
• A user that is not logged in will see the form to login.
• When the form is submitted, the following validation should occur using PHP:
o Access Code: A numeric value with a length of 5
o Password: A string between 3 to 6 characters
o Both Access Code and Password should match a record in the timing_users table.
• Unsuccessful login should display an error in provided alert area.
• Successful login will
o Save the current time to the timing_users table for the logged in user
Logout - logout.php
• A user that I logged in will be logged out and then redirected to Login (login.php)
• A user that is not logged in will be redirected to the UhOh page
Home - index.php
• A user must be logged in to access this page
• A user that is not logged in redirect the user to Login (login.php).
• A user that is logged and not passed the 2 minute limit, will be shown:
o A random quote and it’s author from the timing_quotes table
§ Randomization can be completed within your Query or within PHP
o How much time they have left before being automatically logged out
