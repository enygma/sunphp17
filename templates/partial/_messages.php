{% if messages is defined %}
    {% if messages.error|length > 0 %}
        <div class="alert alert-danger">
        {% for message in messages.error %}
            {{ message }}<br/>
        {% endfor %}
        </div>
    {% endif %}
    {% if messages.success|length > 0 %}
        <div class="alert alert-success">
        {% for message in messages.success %}
            {{ message }}<br/>
        {% endfor %}
        </div>
    {% endif %}
{% endif %}
