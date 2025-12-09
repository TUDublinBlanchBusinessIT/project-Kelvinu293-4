"# project-Kelvinu293-4- Registration"
This project you will be creating a student registration where student enter their details on the student form, pick their programmes and modules then finish off by paying for their registration.

This project include:
.Four database table on MySQL Workbench
.Creating forms
.Inserting data into the database in MySQL Workbench 
.Handle Session
.Table with data insert from forms
'Select and Join

Step 1
Bacis login form for username and password.
Where if both fields are filled in, both username and password are stored in the $_SESSION.
When both are successful, the user is redirected to the studemt.html.

Step 2
student.php read the form data from student.html
Insert a new data record into student table
After filled all the field, the user is redirected to the programme.html

Step 3
programme.php read the form data from programmet.html
Insert a new data record into programmes table
Also have drop list in it

Step 4
modules.php read the form data from modules.html
Insert a new data record into modules table
Also have slider control in it

Step 5
payments.php read the form data from payments.html
Insert a new data record into payments table
Also have radion buttons and checkbox in it

Step 6
Create a table in showProgrammewithModules.php
By SELECT with an inner join the both database table programmes and modules
Display data from programmes and modules by join programmes.ProgrammeID = modules.ProgrammeID

Step 7 
After paying by entering data on payments.html 
Redirected user to the Logout.php
Which destory the session and bring you back to login.php
To start again


