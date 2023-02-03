# A Simple Wordpress-Project With A Micro-Service Architecture


# STEPs 1

Click Launch Instances to launch an EC2 Instance with the desired AMI of your choice 
write a user-data script that installs wordpress on start up and paste it into additional configuration of your instance to enhance agility or you can just type in the command manually to install Apache web server {sudo apt install apache2}, MySql server {sudo apt install mysql-server}, then [wget https://wordpress.org/latest.tar.gz]
After downloading, you extract the file using {tar xzvf latest.tar.gz}, then move it to this path /var/www/html.


# Steps 2

Configure your DB client and create a DB for WordPress by specifying the following 

sudo mysql -u root -p <<EOF
CREATE DATABASE wordpress;
CREATE USER 'wpuser'@'localhost' IDENTIFIED BY 'wpuser_password';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wpuser'@'localhost';
FLUSH PRIVILEGES;
EOF 
                            
  "Make sure to edit the name and password"
cd into your /var/www/html/wordpress and change the wp-config-sample.php file to wp-config.php and edit the info for DB Name, DB User, DB Password, to the DB you created earlier .
 
 Validate that the installation was successful by typing your ip address/wordpress/ .

# Steps 3
 
Create an RDS (MYSQL) instance and configure the security group to allow access where neccessary (port 3306) and specify the password and user name .

After launching the instance, wait for the endpoint to load, then copy it into a note pad .                            
                            
# Steps 4
 
On your webserver, configure wordpress and connect it to the DB by specifying the endpoint of your DB instance you copied earlier.
                            
# Steps 5
                            
After Aunthenticating , configure your theme to any that fits your choice.                            
