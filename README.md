# App name : INSTAGRAM Z
    web application that implements instagram's functionality developed as a practicing project with laravel framework

# Functionality:
    - showing users profiles by id
    - register and login users
    - Auth users can add posts
    - posts image fits in square
    - Edit profile's data and add posts according to policy
    - Edit profile image and default profile image
    - following and unfollowing users and count them
    - home page contains posts of following users
    

# Up comming functionality:
    - delete posts
    - sending mails to registered users
    - searching for users


# How to test the functionality : 
    * setting: 
        - clone the repository
        - install dependencies 
        - create a mysql database named 'instaz_db'
        - run the migrate files
        - run the project
    
    * Testing: 
        -  '/'  : register new user
        - edit profile 
        - '/profile/1' : add new post
        - logout and visit '/profile/1'
        - logout and try to add new post
        - notice 'add profile' link is viewed only for the logged user
        - logout and visit '/profile/1/edit' 
        - login and edit profile title description and image
