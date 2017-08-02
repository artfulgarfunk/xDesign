# xDesign
A web app made for displaying XML vehicle data for easy consumption, built in Laravel and PHP

# Design
I chose a simple design with the minimal necessary components, built in Laravel and using PostgreSQL for the database. Separation of concerns is key, I tried to keep the controllers "skinny" and have only presentation logic in the views, and none in the routes.

The database was designed based on a given XML data file (see storage/VehicleSample2.xml).
I used Laravels Eloquent ORM and made a new Vehicle Model with multiple attributes for various vehicle details which are the sub-nodes in the original XML file.
This makes the data easy to extract and manipulate, as shown in the vehicle controller and various views.

The front end consists of two pages. A vehicle index page which shows the model and make of each vehicle, each of which link to their own unique url and individual vehicle view, displaying all information for the chosen vehicle (e.g. vehicles/4)

# Next Steps
- Use of a base.html which others inherit from (stops repetition)
- API for consumption on other platforms
- Database authentication/validation
- Basic CRUD functionality for models
- Test Suite
- A method for sorting the data based on attributes such as whether the vehicle has a trailer or not. I would use Ajax to keep this on one page, without having to redirect to new URLs.

# Requirements
- Make sense of sample vehicle data: organise and save to database
- Meaningful db structure based on vehicle data
- Simple front end to display data to client
- Optional: Create a simple API to consume the data on a 3rd part application web and/or mobile

# Built with
- PHP
- Laravel
- PostgreSQL
- Composer
- Bootstrap

# Instructions
- Install [Laravel](http://laravel.com/)
- Clone this repo
- `cd` into vehicle_manager
- Run `composer update` to install dependencies
- Run `php artisan migrate` for db migrations
- Run `php artisan serve` to start the server
- Visit localhost:8000/vehicles in your chosen browser
