<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylecu.css" type="text/css">
    </head>
<body>
    <header>
		<h1>BPJS Ketenagakerjaan</h1>
		<nav>
			<ul>
				<li><a href="home.php">Beranda</a></li>
				<li><a href="script1.php">Penghitungan JHT</a></li>
				<li><a href="script2.php">Penghitungan JKK</a></li>
				<li><a href="script3.php">Penghitungan JK</a></li>
				<li><a href="script4.php">Penghitungan JP</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
			</ul>
		</nav>
        <form action="proses.php" method="post">
            <ul>
                <li>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="user_name" required>
                </li>
                <li>
                    <label for="mail">E-mail:</label>
                    <input type="email" id="mail" name="user_email" required>
                </li>
                <li>
                    <label for="msg">Message:</label>
                    <textarea id="msg" name="user_message"></textarea>
                </li>
                <li class="button">
                    <input type="submit" name="button" id="button" value="Send your message" />
                </li>
            </ul>
        </form>
</body>
</html>