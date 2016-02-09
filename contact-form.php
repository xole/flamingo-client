<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    </head>
    <body>
<div class="col-md-12 col-sm-12 contact-form">
                <div class="col-md-12 contact-form">
                <div class="panel panel-default">
                    <div class="panel-heading">	
                        <h4 class="panel-title"> <i class="fa fa-envelope"></i>Kontakt</h4>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="feedbackForm" method="post">
                              
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Emri Juaj" value="" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Emaili Juaj" value="" required>
                            </div>
                            <div class="form-group">
                                <textarea style="max-width:100%" rows="10" cols="100" class="form-control" id="message" name="message" placeholder="Mesazhi" required>Message</textarea>
                            </div>
                            <button type="submit" id="feedbackSubmit" name="send" class="btn btn-primary send-button">Dergo Kerkese</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



