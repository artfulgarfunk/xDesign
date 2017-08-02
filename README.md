# xDesign
A web app made for displaying XML vehicle data for easy consumption, built in Laravel and PHP

# Design
I chose a simple design with the minimal necessary components, built in Laravel and using PostgreSQL for the database. Separation of concerns is key, I tried to keep the controllers "skinny" and have only presentation logic in the views.

The database was designed based on a given XML data file (see storage/VehicleSample2.xml).

I used Laravels Eloquent ORM and made a new Vehicle Model with multiple attributes for various vehicle details which are the sub-nodes in the original XML file.
This makes the data easy to extract and manipulate, as shown in the vehicle controller and various views.

The front end consists of a vehicle index page which shows the model and make of each vehicle. Each of these is a link to a unique url which redirects to an individual vehicle view, displaying all information for the chosen vehicle (e.g. vehicles/4 )

# Next Steps
- Basic front end, perhaps React for displaying details
- Bootstrap 3 for ease of use on multiple screen sizes (e.g. mobile)
- Use of a base.html which others inherit from (stops repetition)
- API for consumption on other platforms
- Database authentication
- Basic CRUD functionality for models
- Testing

# Requirements
- Make sense of sample vehicle data: organise and save to database
- Meaningful db structure based on vehicle data
- Simple fronted to display data to client
- Optional: Create a simple API to consume the data on a 3rd part application web and/or mobile

# Built with
- PHP
- Laravel
- PostgreSQL
- Composer
