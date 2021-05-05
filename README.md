# Local Development Environment

First you will need to clone this repository onto your machine.

You will then need docker and docker-compose.

### Windows and MacOS
You can install Docker Desktop for [Windows here](https://docs.docker.com/docker-for-windows/install/) and [MacOS here](https://docs.docker.com/docker-for-mac/install/). You will not need to install docker-compose as it comes with Docker Desktop.

If you are having issues starting Docker containers on Windows, you may have the WSL checkbox enabled in the Docker Desktop settings.
### Linux
You can install [Docker Engine here](https://docs.docker.com/engine/install/). You will also need to install [Docker Compose](https://docs.docker.com/compose/install/).

## Starting the docker containers

Open your choice of terminal / command prompt, ensure that you are in the root directory of the repository.

Now run docker-compose up, your containers should now be running in that terminal window (meaning you cannot use that terminal for anything else).

On your web browser, go to 'localhost'. Go through the WordPress installation settings with the title set as "Townsville Jazz Club" and a username, email and password of your choice.

You are now successfully on our WordPress website with a database and phpMyAdmin connected.

If you would like to stop the website and the other containers, simply press ctrl+c in the terminal window or press stop on Docker Desktop.

## Web Hosting
Both our test and production websites are running on a virtual environments hosted by Amazon Web Services. We decided on AWS as it is the industry standard and all team members had good experience using that hosting platform. Both sites can be found at the following links:

**TEST HOST** - http://ec2-13-59-80-168.us-east-2.compute.amazonaws.com/  
**PRODUCTION HOST** - http://ec2-3-143-210-183.us-east-2.compute.amazonaws.com/

## WP-Migrate DB
If you wish to migrate any content changes you have made in local to test or prod, follow the steps below.
 
1. Head to the plugins tab in WP-Admin and ensure that WP-Migrate DB is enabled.
2. Head to the tools tab in WP-Admin and select 'Migrate DB'.
3. Press 'New Migration' and in the next window select 'Export Database'.
4. You should be re-directed to a new window which will ask you to fill in the search and replace values. You will have to enter in different values depending on what enviroment you are exporting to.
	4a. If you are exporting to your local enviroment, put //localhost in the top box and /var/www/html in the bottom box.
	4b. If you are exporting to the test enviroment, put //ec2-13-59-80-168.us-east-2.compute.amazonaws.com in the top box and /var/www/html in the bottom box.
	4c. If you are exporting to the prod enviroment, put //ec2-3-143-210-183.us-east-2.compute.amazonaws.com in the top box and /var/www/html in the bottom box.
5. Scroll to the bottom of the screen and select 'Export Database'. You can optionally select 'Save Profile' to save your configration for each enviroment. This will download a .gz file with an sql text file within.
6. Navigate to the enviroment of your choosing but amend /phpmyadmin at the end of the url.
	6a. If you are navigate to your local enviroment, you will actually need to navigate to localhost:8080
7. Sign into to the enviroment with the following details.

	**Prod & Test:**
	
	Username: wpadmin
	
	Password: wpadminpass
	
	**Local:**
	
	Username: wordpress_user
	
	Password: wordpress_password
	
8. In the phpmyadmin toolbar, select 'databases; and then select the 'wordpress' database. Once the database is selected, select 'import' in the toolbar.
9. Select 'Choose File' and navigate to the .gz file you downloaded in step 5, select this file and press 'go'.
10. You will be taken to a new window which will let you know that your files have been successfully imported.
11. Head to WP-Admin and ensure that all changes have imported successfully.
