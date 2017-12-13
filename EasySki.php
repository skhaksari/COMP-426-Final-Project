
<!DOCTYPE html>
<html>
    <head>
        <title>
            EasySki
        </title>
        <style type="text/css" media="screen">
		#calendar-events{ display: none; }
	   </style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="EasySki.css">
        <script src="jquery-3.2.1.js" type="text/javascript" charset="utf-8"></script>
        <script src="jquery-calendar/scripts/calendar.js"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-default navbar-custom">
            <a class="navbar-brand" href="#">EasySki</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <span class="navbar-text">
                        Ski Resort Tickets At Your Fingertips
                </span>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div class="col-sm-6 col-lg-14" id="resort_display">
            <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <label for="start_date">Location</label>
                    <div class="input-group">           
                        <input id="autocomplete" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="start_date">Check-In</label>
                    <div class="input-group">           
                        <input id="start_date" type="date" class="form-control">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="start_date">Check-Out</label>
                    <div class="input-group">
                        <input id="end_date" type="date" class="form-control">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="form-check">
                    <label class="near_me">Near Me</label>
                    <div class="input-group">
                        <input class="form-check-input" type="checkbox" value="">
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="card lighten-2 text-center z-depth-2">
                    <div class="panel-heading"></div>
                    <div class="card-body">
                            <p class="white-text mb-0"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card lighten-2 text-center z-depth-2">
                    <div class="card-body">
                            <p class="white-text mb-0"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" offset="">
                <div class="card lighten-2 text-center z-depth-2">
                    <div class="card-body">
                            <p class="white-text mb-0"></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div id="dayHeading">
        </div>
	   <p></p>
        <button id="previousMonth">Previous Month</button>
        <button id="nextMonth">Next Month</button>
        <div id="calendar">
        </div>
        <div id="calendar-events">
        </div>
        <div id="output">
            
        </div>
        <div class="col sm-4 offset-md-8">
            <iframe src="https://www.google.com/maps/d/embed?mid=1LtgLYclPJ1onQFSyNLP7Rf-lijW41Snw" width="450" height="450"></iframe>
        </div>
        </body>
</html>
