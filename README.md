# Team 01

# Team 01


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

Now run docker-compose up, your container should now be running in that terminal window (meaning you cannot use that terminal for anything else)

On your web browser, go to localhost and you are now successfully on our WordPress website with a database connected.

if you would like to stop the website and database containers, simply press ctrl+c in the terminal window.