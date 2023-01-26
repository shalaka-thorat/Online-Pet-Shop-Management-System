# Online Pet Shop Management System

##	Problem Statement

Design an Online Pet Shop Management System which will have 3 modules described as follows:<br><br>
a)	Vet Appointment:  which will schedule vet-appointments for pets and store the entries in the table called 'appointment'.<br><br>
b)	Adoption: in which users will be able to see pets available for adoption (information retrieved from database called 'avpets') and which will allow users to fill the cat/dog form and these requests will be stored in a different table called 'adopt' .<br><br>
c)	Paw Cart: which will display menu of food items, toys and pet treats available for shopping. This information will be retrieved from a table called 'foodtoys'. When user places an order, then that entry must be made in database called 'orders' and listing of individual items in the order will be mapped according to order number in table called 'orderitems'.<br><br>
The user must first create an account and login before accessing these modules. The information related to user accounts will be stored in table called 'user'.

##	Framework of the proposed work in project

* Creating Required Database and Tables <br>
Firstly, database with all the tables including proper schema and primary, foreign keys is created.

*	Creating Login/Signup Page<br>
Next, Login/Signup Page layout is created and proper validation for each element in login/signup form is made using PHP.

*	Creating Home Page of Website<br>
A detailed design of the homepage is created with application of CSS and HTML and various modules were linked to it.

*	Creating Vet-Appointment Module<br>
A proper PHP validated form for every input field was made and thank you page when appointment is scheduled is created.

*	Creating Adoption Module<br>
In this module, there are links for filling Cat Adoption and Dog Adoption Forms made with PHP validation. And another link is there which shows pets available for adoption in which values are retrieved from database and displayed in table format.

*	Creating PawCart Module<br>
It displays a menu showing different items for shopping, values of which are retrieved from database. It shows items which are out of stock in grey field. There are 2 forms, one for placing an order where user has to enter item codes and quantity, and another for confirming order where order summary is shown and user has to enter address and mobile number and confirm the order. Then a thank you page will be shown.

For more information, click <a href="Project Report.pdf">HERE</a>.

<img src="sign-up.png"></img>



<h5>---------------------------------------------------------------------------------------------------------------------</h5>
<h3>How to run the Project and Access the Website:</h3>

You will have to install xampp software, please try following these steps:

<ol type="1">
<li>Use apache server and mysql from the xampp the software. Turn these 2 ON from the xampp control panel.
<br>
<li>After that go to the URL: http://localhost/phpmyadmin/, here you can import the SQL File in order to make the db and table configurations.
<br>
<li>Now wherever you have installed xampp, like for example for me it is C drive so path: C:\xampp. In that, go to htdocs folder.
<br>
<li>Create a folder for example: pet-pash and paste all the files from the repository. Additionally, you will have to unzip PHPMailer_5.2.4.zip so that the send mail functionality will work properly.
<br>
<li>Now you're all set to run the website. So go to URL: http://localhost/pet-pash/ (Note: 'pet-pash' should the same name as the folder you have created in Step 4).
(Additional Info: website will always show index.php page first, so whatever you want to display as your home/index page should be included in index.php)
</ol>
