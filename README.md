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
