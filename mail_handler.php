<html>
<head>
    <title>Thank you for your message</title>
    <style>
        @font-face {
            font-family: contentFont;
            src: url(../fonts/NeutraText-LightAlt.ttf);
        }       
        body{
            font-family: contentFont;
            text-align: center;
            font-size: 2em;
            margin: auto;
        }
        div{
            position: relative;
            top: 20%;
            margin: auto;
            text-decoration: center;
        }

        a{
            color: #494949;
            text-decoration: none;
            padding-top: 100px;
            font-size: 1em;
        }

        a:link {
            color: #494949;
            text-decoration: none;
        }

        a:visited {
            color: #494949;
        }

        a:hover {
            color: #494949;
        }

        a:active {
            color: #494949;
        }
    </style>
<body>
    <div>

        <?php 
        if(isset($_POST['submit'])){
            $to = "hello@tiffklau.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $first_name = $_POST['first_name'];
            $subject = "Tiffklau Form submission";
            $subject2 = "Tiffklau Message Confirmation";
            $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
            $message2 = "Hi " . $first_name . ", thank you for your message! I will contact you within the next 24 hours. Tiff K Lau";


            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            // You cannot use header and echo together. It's one or the other.
            }
        ?>
    </div>
    <div>
        <br><a href="index.html">Back to Home</a>
    </div>

</body>
</html>