<!doctype html>
<html>
<head>
    <title>Pigeo Labs - We're in the lab with a pen and a pad.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/css?family=Quicksand|Raleway:400,200" rel="stylesheet" type="text/css">
    <link href="src/css/main.css" rel="stylesheet" type="text/css">
    <link href="src/css/peeps.css" rel="stylesheet" type="text/css">
    <link href="src/vendor/fullpage/jquery.fullPage.css">
</head>
<body>
    <div id="container">
    	<section class="section" id="landing">
            <div>
                <a href="/"><img src="src/img/logo.png" alt></a>
                <h1>Pigeo Labs</h1>
                <h2>We're in the lab with a pen and a pad.</h2>
                <a class="btn" href="#about">Who are we?</a>
            </div>
        </section>
        <section class="section" id="about">
            <div>
                <h3>Who are we?</h3>
                <p>We're a bunch of cool people who like to make creative stuff.</p>
                <a class="peep" id="matt" href>
                    Matt
                </a>
                <a class="peep" id="cassandra" href>
                    Cassandra
                </a>
                <br>
                <a class="peep" id="graham" href>
                    Graham
                </a>
                <a class="peep" id="kirk" href>
                    Kirk
                </a>
                <br>
                <a class="btn" href="#platform">Let us explain our mood, dude.</a>
            </div>
        </section>
        <section class="section" id="platform">
           <div>
              <h3>This is what we do...</h3>
              <p id="platform_title">Here's a hint... we create!</p>
              <p id="platform_desc">
                 We can't say too much at this current time! But contact us for more info!
             </p>
             <a class="btn" href="#contact">Say guten tag</a>
         </div>
     </section>
     <section class="section" id="contact">
       <div>
        <h3>If you want to talk...</h3>
        <p>Drop us a line through the following form!</p>
        <form class="fancyform" id="contact-form" method="POST" action="send-email.php">
          <ul>
            <?php
            if(isset($_GET['form_failed']) && $_GET['form_failed'] == 'true') {
                if($_GET['message'] == 'send_failure') {
                    echo '<li><div class="error">Something didn\'t work?! We will take a look into it. For now, please try again!</div></li>';
                }
                if($_GET['message'] == 'missing_info') {
                    echo '<li><div class="error">Oops! Seems like you forgot to type something. Please try again!!</div></li>';
                }
            }
            if(isset($_GET['form_success']) && $_GET['form_success'] == 'true') {
                echo '<li><div class="success">Awesome!! You have successfully sent us an email! We will get back to you ASAP!</div></li>';
            }
            ?>
            <li><input type="text" name="name" placeholder="NAME" /></li>
            <li><input type="text" name="email" placeholder="EMAIL" /></li>		
            <li><textarea name="message" placeholder="Type your awesome message here!"></textarea></li>
            <li><a class="btn" id="form_send_button" href="mailto:ibelieveicanfly@pigeolabs.com" style="text-transform: uppercase">send email</a></li>
        </ul>    	
    </form>
</div>
</section>
</div>
<div id="footer">Copyright &copy; <?php echo date("Y"); ?> <a href="/">Pigeo Labs Incorporated.</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="src/js/main.js" type="text/javascript"></script>
<script src="src/js/peeps.js" type="text/javascript"></script>
<script src="src/js/smoothscroll.js" type="text/javascript"></script>
<!-- <script src="src/js/sliders.js" type="text/javascript"></script> -->
</body>
</html>
