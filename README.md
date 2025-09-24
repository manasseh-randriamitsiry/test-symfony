# Danger
I commited everything without adding anything into the gitignore file to make the project deployement easy and FOR LEARNING PURPOSE ONLY. For real project, make sure to not exposing your config

# Clean everything
```bash 
docker-compose down
docker system prune -f
```

# Build and start
```bash
docker-compose build --no-cache
docker-compose up -d
```

# Wait for startup
```bash
timeout /t 15
```

# Run setup
```bash
docker\setup.bat
```
### Container Management
```bash
# Stop all services
docker-compose down
```
# Rebuild containers
docker-compose up --build
```
# View container status
docker-compose ps

# Remove all data (including database)
docker-compose down -v
```

### Others commands ( database, user etc)
# Access MySQL console
contact manassehrandriamitsiry@gmail.com
