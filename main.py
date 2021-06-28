import urllib
import json
from flask import *
from firebase import Firebase
from werkzeug.utils import secure_filename
from io import StringIO
from pdfminer.converter import TextConverter
from pdfminer.layout import LAParams
from pdfminer.pdfdocument import PDFDocument
from pdfminer.pdfinterp import PDFResourceManager, PDFPageInterpreter
from pdfminer.pdfpage import PDFPage
from pdfminer.pdfparser import PDFParser
from gensim.summarization import summarize
import re

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

@app.route("/upload", methods=["GET", "POST"])
def upload():
  if request.method == 'POST':
    f = request.files.get('file')
    f.save(secure_filename("f.txt"))
    output_string = StringIO()
    with open(secure_filename("f.txt"), 'rb') as in_file:
        parser = PDFParser(in_file)
        doc = PDFDocument(parser)
        rsrcmgr = PDFResourceManager()
        device = TextConverter(rsrcmgr, output_string, laparams=LAParams())
        interpreter = PDFPageInterpreter(rsrcmgr, device)
        for page in PDFPage.create_pages(doc):
            interpreter.process_page(page)

    document = output_string.getvalue()
    document = document.replace("/n", "")
    return render_template("Summary.html", chapter_summary = summarize(document, ratio = 0.1))
    

@app.route("/summarizer", methods = ["GET", "POST"])
def summarizer():
  return render_template("Summary.html")

			
			
@app.route('/', methods=['GET', 'POST'])
def login_page():
	return render_template('login.html')


if __name__ == '__main__':
	app.run()

