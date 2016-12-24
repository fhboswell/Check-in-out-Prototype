#Check in and out prototype with website

This project uses an Esp8266 running node mcu firmare interfeced with an RFID reader in order to keep attendance in a database which is rendered human readable as a website.

![Screenshot](/imgs/pic1.JPG)

### How It Works


When the RFID reader detects an RFID tag in the vicinity it sends some data via SPI protocol to the microcontroller.

The data that it sends is a unique hexidecimal code. these codes all refrence one person on the server.

The microcontroller makes a GET request witch uses a php file to make some sql quereys to a server, these quereys chech someone in if they were previously checked out, or vise versa. If the RFID's unique ID is not in the system under a name, there is another page on the website where somone can assign names to tage.

The software that is running on the device is written by me but the source is on a computer i don't currently have access too as im am out of the country, i will update this repository for that code when i return, hopefully for now this fideo will suffice.


[Video Demo](https://youtu.be/Jm5qqMDZw0A)

















