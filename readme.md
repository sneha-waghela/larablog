Steps to be followed:
- Create Virtual Host for the Project
- Run 'composer update --no-scripts' command
- create .env file and add DB credentails to it
- Run 'php artisan migrate' command to take db changes
- This demo contains register & login functionality where user can register as admin or user type
- guest user can only see post list & post detail page
- admin logged In user can create post, edit his own post & can delete everyone's post
- user type logged In user can create post and can edit & delete only his post