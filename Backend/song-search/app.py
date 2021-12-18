import sqlite3
from sys import exit
from flask import Flask, render_template, request, jsonify

app = Flask(__name__)

# Connect to a database
db_path: str = './database/songs.db'
db = sqlite3.connect(db_path, check_same_thread=False)
cursor = db.cursor()


@app.route('/')
def index():
    print('Site was loaded successfully.')
    return render_template('index.html')


@app.route('/search')
def search():
    key = request.args.get(key='q')

    # Parse a SQL query
    songs: list = cursor.execute(
    f'''
    SELECT name, duration_ms FROM songs
    WHERE name LIKE '%{key}%'
    ORDER BY name;
    '''
    ).fetchall()

    # Return type JSON
    return '' if not songs else jsonify(songs)


# Run the Flask app
if __name__ == '__main__':
    app.run()
    db.close()