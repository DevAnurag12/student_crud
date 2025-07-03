# student_crud
This is a simple CRUD (Create, Read, Update, Delete) web application built using HTML, CSS, JavaScript, PHP, and MySQL. It allows users to manage student records through a browser-based interface.

🔧 Project Setup (Run Locally with XAMPP)
Follow the steps below to run this project on your local machine:

📁 1. Clone or Download the Project
Clone this repository using Git:
git clone https://github.com/DevAnurag12/student-crud-app.git
Or click Code → Download ZIP, then extract it.

📂 2. Move to XAMPP htdocs Folder
Copy the extracted project folder to:
C:\xampp\htdocs\
Example:
C:\xampp\htdocs\student-crud-app\

⚙️ 3. Start Apache & MySQL
Open XAMPP Control Panel
Click Start next to:
✅ Apache
✅ MySQL

🗃️ 4. Create the Database
Go to http://localhost/phpmyadmin

Create a new database named:
student_crud
Then run this SQL command in the SQL tab to create the table:


**CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  course VARCHAR(100)
);**

🌐 5. Access the App
Open your browser and go to:
http://localhost/student-crud-app
You should now see the student management system!
