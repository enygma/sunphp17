{% extends 'layouts/main.php' %}

{% block content %}

<p>
    Enter your username or email address below and an email will be sent to the matching email account with instructions
    on how to reset your password.
</p>

<form class="form-horizontal" action="/user/reset" method="POST">
    <div class="form-group">
        <div class="col-md-8">
            <label for="username">Username/Email</label>
            <input type="text" name="username" class="form-control">
        </div>
    </div>
    <div class="form-group">
       <div class="col-md-2">
           <button type="submit" class="btn btn-primary btn-block">Reset</button>
       </div>
   </div>
</form>


{% endblock %}
