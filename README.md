# Location Test API

  How to use it

    Clone repo  
    Run migration - php artisan migrate
    Add dummy data - database/dummyData.sql has some basic test data to start with
    Use (and edit) the example env file - cp ./.env.example ./.env
    Serve the app - php artisan serve
    

  API end points  

    Get all locations - GET /api/locations  
    Get a location - GET /api/locations/{locationid}  
    Add a location - POST /api/locations  
    Update a location - POST /api/locations/8  
    Delete a location - DELETE /api/locations/2  
    Get users with latest location - GET /api/users

  See Postman file for parameter details
