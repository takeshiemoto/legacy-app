# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a minimal Ubuntu Docker environment setup. The repository provides a lightweight Ubuntu 24.04 container configuration designed for development and testing purposes.

## Common Commands

### Build the Docker image
```bash
docker build -t ubuntu-min .
```

### Run container interactively
```bash
docker run --rm -it --name ubuntu-min -v "$(pwd)":/workspace ubuntu-min
```

### Run container in background and login
```bash
docker run -d --name ubuntu-min -v "$(pwd)":/workspace ubuntu-min sleep infinity
docker exec -it ubuntu-min bash
```

### Stop and remove container
```bash
docker stop ubuntu-min && docker rm ubuntu-min
```

## Architecture

This is a minimal Docker setup with:
- Base image: Ubuntu 24.04
- Working directory: `/workspace` (mounted from host)
- Default command: bash shell
- The host's current directory is mounted to `/workspace` inside the container

## Development Context

The repository was recently reset from a legacy Laravel/React application to this minimal Docker environment. Previous commits show it contained a full-stack application with backend (Laravel) and frontend (React) components, but has been simplified to just provide a Ubuntu container environment.