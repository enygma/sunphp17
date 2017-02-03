{% extends 'layouts/main.php' %}

{% block content %}

<form class="form-horizontal" action="/user/login" method="POST">
    <div class="form-group">
        <div class="col-md-8">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-2">
           <button type="submit" class="btn btn-primary btn-block">Sign in</button>
       </div>
   </div>
</form>
<p>
    Can't remember your password? <a href="/user/reset">Click here</a> to reset it.
</p>


{% endblock %}
