# App name : INSTAGRAM Z
    web application that implements instagram's functionality developed as a practicing project with laravel framework

# Functionality:
    - showing to the users profiles to all
    - register and login users
    - Auth users can add posts

# Up comming functionality:
    - edit profile data 
    - edit the profile image 
    - searching for users
    - following users

# How to test the functionality : 
    * setting: 
        - clone the repository
        - install dependencies 
        - create a mysql database named 'instaz_db'
        - run the migrate files
        - run the project
    
    * Testing: 
        -  '/'  : register new user
        - add a new record in the table profile from phpMyAdming
        - '/profile/1' : add new post
        - logout and visit '/profile/1'
        - logout and try to add new post
