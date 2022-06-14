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