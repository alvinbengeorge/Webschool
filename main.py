import urllib
import json
from flask import *

data = {"rahul.jaikrishna@gmail.com" : "hi", "alvinbengeorge@gmail.com": "hi"}
app = Flask(__name__)

@app.route('/login', methods=['GET', 'POST'])
def basic():
	if request.method == 'POST':
		email = request.form.get("sup")
		password = request.form.get("pwd")
		print(type(password), password, email, type(email))
		for each in data:
			if email == each:
				if password == data[each]:
					return render_template('Intro_page.html')
					break
				else:
					return "wrong pass"
			else:
				"wrong user"
			
			
					
			
@app.route('/', methods=['GET', 'POST'])
def login_page():
	return render_template('login.html')


if __name__ == '__main__':
	app.run()

