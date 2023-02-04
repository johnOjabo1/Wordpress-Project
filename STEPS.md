# DOCUMENTATION ON DEPLOYING A WORDPRESS WEBSITE USING A MICROSERVICES ARCHITECTURE INVOLING EC2 FOR THE WEB SERVER AND RDS FOR THE DATABASE 

# STEPS INVOLVED 

1. First of all navigate to your AWS management console and under your services you click RDS and click database and then you create database and feel  the space for DB Identifier, password, username and specify your security group to allow access from Port 3306. 
Then you create the database after creating a database it takes at around 4 minutes to finish launching then after launching you copy your endpoint into a notepad.
********************************************************************************
2. Under your compute service, click EC2 then you create an EC2 instance and you choose the AMI of your choice also you can write a user that has scripts that install WordPress on startup to increase agility or you can run some commands to download WordPress extract WordPress and move it to the respective folder .
Note that when installing WordPress you need lamp stack which is Linux , Apache, MYSQL  and PHP. 
*********************************************************************************
3. First of all SSH into your EC2 instance by copying the public ip address and use the key pair to validate and authenticate {Change the permission of the keypair by running chmod 400 <the name of the keypair>}, you'll be prompted to accept if you want the ip address to permantly known on your host, then type yes.
*********************************************************************************
 4. After aunthenticating, you update your package manager by typing, " sudo apt update ", then you install Apache (sudo apt install apache2) since you are already on a Linux machine, you go ahead to a install MySQL (sudo apt install mysql-server) which is a database client for your instance then you install PHP then you go ahead to download WordPress using this command (wget https://wordpress.org/latest.tar.gz \
tar xzvf latest.tar.gz\
sudo mv wordpress /var/www/html/) 
The above command downloads wordpress , extracts it and moves it to the apache root folder.after running the above command, you  then  create a local Database for WordPress  first by using the database client by typing the following command.
**********************************************************************************
sudo mysql -u root  (to login to the mysql server)
CREATE DATABASE wordpress;
CREATE USER 'wpuser'@'localhost' IDENTIFIED BY 'wpuser_password';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wpuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
**********************************************************************************
This script creates a DB for WordPress and specifies its name, user and password .
Make sure to edit the  name specify the password and The Host .
**********************************************************************************

5. After that you go to your WordPress folder which is in the Apache root folder and you change the name of the  wp-config-sample.php file the name  wp-config.php and you VI into wp-config.php then you edit the file to match the DB name, DB password, and DB user to your specified DB that you recently created and also the DB host.
**********************************************************************************
 6. Copy your IP address paste it into a browser then add "/WordPress"  and enter , it takes you to a WordPress website then you start specifying your values "Choose english or any language of your choice " then  type  the database name you created  "The name of the RDS database". The username for the RDS database and for Host you paste the endpoint you copied earlier then you click submit. then WordPress loads into your C-Panel for you to configure your WordPress website and that's all for now concerning WordPress.
**********************************************************************************
7. Then you cd  into your Apache root folder and you copy and push all the WordPress files to your github repository using the following commands 
git init
git add wordpress
 git commit – m  "the message you want then enter"
 then you type "git branch" to know the branch you are currently on and you type 
git push -u origin "and the branch"
 thank you .
