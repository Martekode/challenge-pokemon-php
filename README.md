# challenge-pokemon-php
we were tasked to start coding in php. this reveals alot of surprises both good and "bad".
## the beginning
i'm just trying to display the name and  a picture for now, to get myself familliar.
i found quickly how the fetching worked and how to display as an array in de var_dump. although navigating invoked some confusion at first because addressing different content of that array was different from vanilla js. i found out it is incredably easier then vanilla js. You can just address the name instead of the index of the position of the content of the array.
This way i found the data quickly. also no async await :p.
displaying the data however within html tags required some searching. no i create new domelement but i would like to find a way to talk to already existing html elements.

## adding search input
i added an input field and a button. i had to figure out how to post the data from the input field to the php code as soon as the button is pressed. it doesn't work perfectly but it oke for now. it took a long time to implement sinds i was searching for a long time. 
## added evolves from
i added the eveolves from name underneath the picture via a new fetch. i need to add a check to see if it exist first so that we don't get error when there isn't an evolves from array.
## evolution
i added the front default sprite from the "evolves_from"-pokemon. this is done by fetching again with the first fetch url but with the "evolves_from"-pokemon instead of the original pokemon. this first didn't work because i used the wrong fetch-variable. i quickly fixed that and now it displays.

## could be better
my code is not optimal... its works but the way it is structured is atrotious. everything is inside the button and it is all written after each other instead of calling functions. so my next step is to refacture the code. this is not easy sinds i have no idea how this al works. I can't seem to include a php file into the html. I just don't understand it yet.

## cleaned up some code
sinds i never really worked with multiple functions and parameters and return values i wanted to clean my code a bit. Even if it's just little... I started with seperating my php files. one for the structure of the page and an other one for the logic (index.php and code.php). i Did this by including the code file atop the body. this makes it so that i can just write the variables in the html itself.
i had some troubles with making the function and returning the value. but after some help from grandmaster SICCO i understand. i even came up with my own solution to returning multiple values without asking the grandmaster. #proud

