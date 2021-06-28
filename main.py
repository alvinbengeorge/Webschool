import urllib
import json
from flask import *
from firebase import Firebase

firebaseConfig = {
    "apiKey": "AIzaSyDw65BvUcaILJoXX8Mws5QOTRLjyXCGlf0",
    "authDomain": "webschool-7e9db.firebaseapp.com",
    "projectId": "webschool-7e9db",
    "storageBucket": "webschool-7e9db.appspot.com",
    "messagingSenderId": "396594842645",
    "appId": "1:396594842645:web:df2c845b47405bacb9521c",
    "databaseURL" : " "
  }

app = Flask(__name__)
fire = Firebase(firebaseConfig)
auth = fire.auth()

firebaseConfig = {
    "apiKey": "AIzaSyDw65BvUcaILJoXX8Mws5QOTRLjyXCGlf0",
    "authDomain": "webschool-7e9db.firebaseapp.com",
    "projectId": "webschool-7e9db",
    "storageBucket": "webschool-7e9db.appspot.com",
    "messagingSenderId": "396594842645",
    "appId": "1:396594842645:web:df2c845b47405bacb9521c",
    "databaseURL" : " "
  }

fire = Firebase(firebaseConfig)
auth = fire.auth()

# Replace with this in main.py
@app.route('/login', methods=['GET', 'POST'])
def basic():
    if request.method == 'POST':
      if request.form["submit"] == "register":
        email = request.form.get("sup")
        password = request.form.get("pwd")
        try:
          register = auth.create_user_with_email_and_password(email, password)
          return render_template('login.html')
        except:
          return "Invalid email and password. "
      
      elif request.form["submit"] == "login":
        email = request.form.get("sup")
        password = request.form.get("pwd")
        try: 
          login = auth.sign_in_with_email_and_password(email, password)
          return render_template('Intro_page.html')
        except:
          return "Wrong email and password."


			
			
@app.route('/', methods=['GET', 'POST'])
def login_page():
	return render_template('login.html')


if __name__ == '__main__':
	app.run()

