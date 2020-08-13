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
    - Edit header and add link to profile 
    - searching for users


# How to test the functionality : 
    * setting: 
        - clone the repository
        - install dependencies 
        - create a mysql database named 'instaz_db'
        - run the migrate files
        - run the project
    
    * Testing: 
        - go to '/'  : register new user
        - '/profile/1' : add new post
        - edit profile description and image
        - logout and visit try to visit '/profile/1' and '/profile/1/edit' //notice policy of user
        - register more users and add posts
        - follow and un follow users
        - go to '/' view the follwing user posts
