<h1 align="center"><a href="https://eescheldure.ru/" target="_blank">EEScheldure</a></h1>
<h3 align="center">Project essence</h3>
<p align="center">Sending a message with the nearest bus stop bot to Telegram.</p>
<h3 align="center">Project implementation</h3>
<p align="center">The app on the phone in the background gets GPS and sends a request with latitude, longitude and user to the apache server once every certain time. The server enters the received information into the database. The NodeJS script running via PM2 receives information from the database and then processes it: finds the nearest bus stop, receives data about it, sends a request to the bus schedule API, and then sends a bot message to the Telegram chat.</p>
