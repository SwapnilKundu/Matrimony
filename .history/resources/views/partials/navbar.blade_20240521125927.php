<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand img {
            max-width: 40px;
        }
        .navbar-brand .logo-bangladeshi-title {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .navbar-brand .logo-bangladeshi-title1 {
            color: #007bff;
        }
        .navbar-collapse {
            justify-content: flex-end;
        }
        .navbar-nav .nav-item {
            margin-right: 10px;
        }
        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .contact-form h3 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #343a40;
        }
        .form-group label {
            font-weight: bold;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 40px 0;
        }
        .footer h3 {
            color: #fff;
        }
        .footer p, .footer a {
            color: #bbb;
        }
        .footer a:hover {
            color: #fff;
        }
        .social-icons a {
            margin: 0 10px;
            color: #bbb;
            font-size: 18px;
        }
        .social-icons a:hover {
            color: #fff;
        }
        .footer .text-center {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="width: 100%;">
        <a class="navbar-brand" href="/">
            <img width="40" border="0" alt="Bangladeshi Matrimonials" title="Bangladeshi Matrimonials" id="domain_title" src="https://imgs.bangladeshimatrimony.com/cbsimages/hp_new/bangladeshi_logo.svg">
            <span class="logo-bangladeshi-title">
                Eternal <span class="logo-bangladeshi-title1">Match</span>.com
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- Empty space for alignment -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                @auth
                <span class="text-primary">Name: {{ Auth::user()->name }}</span>
                <a href="{{ route('userProfile.details', ['id' => Auth::user()->id]) }}" class="btn btn-outline-primary mx-2 my-2"><i class="fa fa-user"></i> View Profile</a>
                @if(Auth::user()->status == 1)
                    <a href="{{ route('create.member') }}" class="btn btn-outline-success mx-2 my-2"><i class="fa fa-plus"></i> Add Bride/Groom</a>
                @endif
                <a href="{{ route('all.members') }}" class="btn btn-outline-warning mx-2 my-2"><i class="fa fa-users"></i> All Members</a>
                @if(Auth::user()->user_type == 'admin')
                    <a href="/dashboard" class="btn btn-outline-secondary mx-2 my-2"><i class="fa fa-arrow-left"></i> Go To Dashboard</a>
                @endif
                <a href="{{ route('logout') }}" class="btn btn-outline-danger mx-2 my-2" type="submit">Logout <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                @else
                <a href="{{ route('register') }}" class="btn btn-outline-danger my-2 mx-2 my-2"><i class="fa fa-users" aria-hidden="true"></i> Register</a>
                <a href="{{ route('login') }}" class="btn btn-outline-primary mx-2 my-2" type="submit">Login <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                @endauth
            </form>
        </div>
    </nav>

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
                        <p><a href="#">Terms and policy</a></p>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
