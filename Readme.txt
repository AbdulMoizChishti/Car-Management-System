Frontend :
html-5
css3
Bootstrap 4
Jquery 3.3.1
Basic JS

Backend:
Php 7
MySQL
Apache Xampp 3.3.0



Backend Pages:
Config.php (Database se Connection wali file)
login.php (For Login )
insertr.php (For insertion of record)
delr.php (for deletion of record)
upd.php (for updation of record)
retr.php (to show data from database)

Front-end pages:
home (index.php)
About (about.php)
contact (contact.php)

DataBase Queries:
(For Insertion):  INSERT INTO car (Make, Model,IDcar,Price) VALUES ('$Make','$Model','$IDcar','$Price')
(For Deletion):   DELETE FROM car WHERE IDcar=' . $IDcar
(For Retrieve):   SELECT * FROM car
(For Updation):   UPDATE car SET Make='$Make',Model='$Model', Price='$Price' WHERE IDcar='$IDcar

