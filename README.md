# Web Control Interface for Raspberry Pi Server

## How to use

This repository is intended to be deployed using Portainer into a Docker environment. This can be done by creating a new Portainer stack.

*Note: when making changes to the website content, remember to increment the image tag in docker-compose.yml. Otherwise Portainer will use the cached version of the image.*

**Tested on Portainer 2.11.0 and Docker 20.10.12**

## Features

- Able to shutdown and restart the Pi hardware from a simple web interface
- Able to cancel a shutdown or restart if it is initiated by accident
- Display the client IP address
