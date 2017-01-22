{% extends 'layouts/main.php' %}

{% block content %}

<h3>Users</h3>

<table class="table table-striped">
    <tr>
        <th>Username</th>
    </tr>
    {% for user in users %}
    <tr>
        <td><a href="/user/{{ user.id }}/view">{{ user.username }}</a></td>
    </tr>
    {% endfor %}
</table>

{% endblock %}
