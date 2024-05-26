<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <style>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
