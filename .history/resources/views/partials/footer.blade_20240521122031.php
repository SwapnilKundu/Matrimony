<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .footer-content h3 {
            margin-bottom: 20px;
        }
        .social-icons a {
            margin: 0 10px;
            color: #343a40;
        }
        .contact-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Contact Us</h3>
                        <p><i class="fa fa-phone"></i> 0172153xxxxx</p>
                        <p><i class="fa fa-phone"></i> 0172153xxxxx</p>
                        <p><i class="fa fa-phone"></i> 0172153xxxxx</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Social Media</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <!-- Add more social icons as needed -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Others</h3>
                        <p>Terms and policy</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class="text-center text-danger" style="border: 1px solid #000; padding: 5px;">
                Copyright © 2024 <span class="text-danger">Razu</span> - All Rights Reserved
            </p>
        </div>
    </footer>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <scri
