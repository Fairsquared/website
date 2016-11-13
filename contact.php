<!DOCTYPE html>
<html>

<head>
    <title>Jordan Mike | Contact</title>
    <!-- Meta Zone -->
    <meta charset="utf-8">
    <meta name="description" content="Jordan Mike, typical dutch plants." />
    <meta name="keywords" content="Jordan Mike, typical dutch plants.">
    <meta name="robots" content="index, follow, all" />
    <meta name="author" content="Jordan Mike">
    <meta name="publisher" content="Jordan Mike">
    <meta name="geo.placename" content="Amsterdam">
    <meta name="geo.region" content="NL">
    <meta name="google" content="notranslate" />
    <!-- Viewport -->
    <meta name="viewport" content="initial-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Jordan Mike">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!-- Javascript -->
    <script type="text/javascript" src="js/main.js"></script>
</head>

<body id="page">
    <header>
        <div id="wrap">
            <a href="index.html" title="Home"><img class="logo" src="img/logo.png" alt="Logo" /></a>
            <nav id="nav">
                <ul>
                    <li><a href="index.html" title="Home">Home</a></li>
                    <li><a href="menu.html" title="Menu">Menu</a></li>
                    <li><a href="gallery.html" title="Gallery">Gallery</a></li>
                    <li><a class="selected" href="contact.html" title="Contact">Contact</a></li>
                    <li><a href="https://www.instagram.com/" title="Instagram" target="_blank" /><img class="instagram-header-icon" src="img/instagram-header-icon.png" alt="Instagram Icon"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="hero-image-contact"> </div>
    <div class="main">
        <?php 
				$action=$_REQUEST['action']; 
				if ($action=="")
				{ 
			?>
            <form action="" method="POST" enctype="multipart/form-data">
                <p>If you have any question about the event or any concern with our sponsors, please let us know through the form below. We'll try to reply as quickly as possible.</p>
                <p>If you'd rather write an email to better keep track of your correspondence, write at <a href="mailto:contact@fair-squared.org" title="In regards to Fair&#178;">contact@fair-squared.org</a>.</p>
                <input type="hidden" name="action" value="submit">
                <input name="name" type="text" value="" size="30" placeholder="First and last name" />
                <br>
                <input name="email" type="text" value="" size="30" placeholder="Email" />
                <br>
                <input name="phone" type="text" value="" size="30" placeholder="Phone" />
                <br>
                <input name="subject" type="text" value="" size="30" placeholder="Subject" />
                <br>
                <textarea name="message" rows="7" cols="30" placeholder="Message"></textarea>
                <br>
                <input type="submit" value="Send" /> </form>
            <?php 
				    }  
				else 
				    { 
				    $name=$_REQUEST['name'];
				    $email=$_REQUEST['email'];
				    $phone=$_REQUEST['phone'];
				    $subject=$_REQUEST['subject'];
				    $message=$_REQUEST['message']; 
				    if (($name=="")||($email=="")||($phone=="")||($message=="")) 
				        { 
				        echo "<p>All fields are required, please fill the form again.</p>"; 
				        } 
				    else{         
				        $from="From: $name<$email>\r\nReturn-path: $email";  
				        $subject="$subject"; 
				        mail("contact@fair-squared.org", $subject, 
				"$message 

				From: 	$name

				Phonenumber: 	$phone

				Email:		$email", $from);
				        echo "<p>Email sent!</p>"; 
				        } 
				    }   
			?>
    </div>
    </div>
    <footer>
        <p>&copy; 2016 Jordan Mike</p>
    </footer>
</body>

</html>