INSTALL LARAGON (JUST NEXT EVERYTHING)  
RUN LARAGON (IT'S OKAY WITHOUT RESTART OF COMPUTER)  
move the folder `ice-cream-web-app-master` to `PATH/TO/LARAGON/FOLDER`/www/ and paste it inside the `www` folder

NEWLY INSTALLED INSTRUCTIONS
enter this chain of commands to run to CMD (no other terminals para less hassle)  
`cd PATH/TO/PROJECT FOLDER`  
`cd ice-cream-server`  
`python -m venv venv`  
`cd venv/Scripts`  
`activate`  
`cd ../..`  
`pip install flask`  
`pip install flask_restful`  
`pip install pypika`  
`pip install mysql-connector`  
`pip install flask_cors`
`python main.py`  


AFTER INSTALLED INSTRUCTIONS  
`cd PATH/TO/PROJECT FOLDER`  
`cd ice-cream-server`  
`cd venv/Scripts`  
`activate`  
`cd ../..`  
`python main.py`  

TO USE THE APPLICATION  
run your ngrok by entering this command `ngrok http 80`  
the url will be `<provided by ngrok>/ice-cream-web-app-master`