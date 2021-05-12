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

## All-In-One WP Migration
If you wish to migrate any content changes you have made in local to test or prod, follow the steps below.

#### We recommend backing up your database prior to importing any new changes. You can backup your database by going to phpmyadmin, selecting the wordpress database on the left and then selecting 'export' in the top toolbar. Do not change any settings, instead select the go button at the bottom. If you make a mistake in the steps below, you can import that backup by going to import tab and importing the backup file.
 
1. Select 'All-In-One WP Migration' in the left toolbar on wp-admin, from there select 'Export'.

2. Press the 'Find <text> Replace with <another-text> in the database' section. In the 'Find' box, enter in the host you are currently on. In the 'Replace with' box, enter in the host you are exporting to. The hosts are:

	Local - localhost
	
	Test - ec2-13-59-80-168.us-east-2.compute.amazonaws.com
	
	Prod - ec2-3-143-210-183.us-east-2.compute.amazonaws.com
	
3. Select 'Advanced Options'. Tick all boxes EXCEPT 'Do not export database' and 'Do not replace email domain'.

4. Select 'Export To' and select file in the resultant dropdown.

5. Navigate to the host you wish to migrate to.

6. 'Select All-In-One WP Migration' in the left toolbar on wp-admin, from there select 'Import'.

7. Select 'Import From' and then 'File' in the dropdown. Navigate to the file you just exported and select it.

8. The plugin will now begin importing the database. Do not navigate away from the page until it is done.

9. Once import is complete, confirm all content has imported successfully.

### How to simultaneously work on pages

As we cannot upload the database onto the repo, this raises some issues if mutiple people are doing seperate pages. If you import someone elses database, it will overwrite all your changes. Here is how to get around that.

Do the following steps prior to importing a different database if you have changes you wish to keep.

1. Select `Tools` in the left tool on wp-admin, from there select 'Export'.

2. Select `All Content` and select 'Download Export File'.

3. Import the new database using the steps in All-In-One WP Migration.

4. Select `Import` in the `Tools` section on wp-admin.

5. Select `Run Importer` underneath the WordPress section.

6. Select `Choose File` and select the export file you downloaded in step 2.

7. Confirm your files are still present.
