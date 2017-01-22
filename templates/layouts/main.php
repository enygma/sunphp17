<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sunshine PHP 2017</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/assets/css/site.css" rel="stylesheet"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top mynav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="color:#FFFFFF" href="#">SUNPHP17</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container" style="padding-top:50px">
        <p>
        {% block content %}{% endblock %}
        </p>
        </div>
    </body>
</html>
