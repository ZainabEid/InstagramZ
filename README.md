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
    - link to profile from  header
    - delete posts
    - follow a user from post
    

# Up comming functionality:
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
        - go to '/'  : register new user
        - '/profile/1' : add new post
        - edit profile description and image
        - logout and try to visit '/profile/1' and '/profile/1/edit' //notice the policy of user
        - register more users and add posts
        - navigate to users by url and Follow/Unfollow users
        - go to '/' view the follwing user posts
        - go to '/profile/1' // notice the posts, following, and follower count
        - cliclk on any post, follow user, navigate to user's profile, delete post
        
