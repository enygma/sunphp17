{% extends 'layouts/main.php' %}

{% block content %}

<h3>{{ user.name }}</h3>

<table class="table table-striped">
    <tr>
        <td>Username:</td>
        <td>{{ user.username }}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{ user.email }}</td>
    </tr>
</table>

{% endblock %}
