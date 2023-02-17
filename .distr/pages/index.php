{% extends 'default.php' %}

{% set PAGE_CLASS = 'page-main' %}


{% block blocks_inner %}
{% include 'header/block.php' %}
{% include '@index/main/block.php' %}
{% include '@index/about/block.php' %}
{% include '@index/events/block.php' %}
{% include '@index/cases/block.php' %}
{% include '@index/stats/block.php' %}
{% include '@index/partners/block.php' %}
{% include '@index/awards/block.php' %}
{% include 'bottom/block.php' %}
{% include 'footer/block.php' %}
{% endblock %}
