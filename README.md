# xDesign

A web app made for displaying XML vehicle data for easy consumption, built in Laravel and PHP

# Design
I chose a simple design with the minimal necessary components, built in Laravel and using PostgreSQL for the database. Separation of concerns is key, I tried to keep the controllers "skinny" and have only presentation logic in the views.

The database was designed based on a given XML data file (see storage/VehicleSample2.xml). I used Laravels Eloquent ORM and made a new Vehicle Model with multiple sub-nodes which represent the vehicles various details; e.g. engine size.

# Next Steps
- Basic front end, perhaps React for displaying details
- Bootstrap 3 for ease of use on multiple screen sizes (e.g. mobile)
- The project currently only works with a single XML Vehicle Node: it should be relatively simple to iterate through the XML and run the same process for each Vehicle instance - hence it is extracted to a distinct method in the Vehicle Controller
- API for consumption on other platforms
- Database authentication
- Individual urls for each db entry; e.g. vehicles/1 to display the first db entry.
- Basic CRUD functionality for all models

# Built with

- PHP
- Laravel
- PostgreSQL
- Composer
- XmlParser
