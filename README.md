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

## disappointment of my features
well... i don't have a lot of features. i miss the moves and a lot of the exeptions. that's because i started over to start learning about my code structure. i kept writing everything inside one funcion basically. that's really bad and it had to show some beginnings of change at some point. Yes i don't have a lot, but to me it is because i have a button that calls a function to get the evolution-data. that's something i feared sinds i didn't fell comfortable with using parameters and functions. You get a lot of "undefined"-errors and that was scary. So it felt like starting over. I'll try to work more like this in the future.

## a new function 
getMuves is the new function i created to count the array with the moves in. if it is smaller then 4 it wil take just the count of it and puch each item into a new array. if it has more then 4 then it's only going to take 4 of them and push them into a new array. at the end it wil return the array. it will display the moves but when tere are less then 4 moves then there is a error with the displaying of it.