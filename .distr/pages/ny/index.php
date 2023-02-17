{% extends 'default.php' %}

{% set PAGE_CLASS = 'page-ny' %}


{% block styles %}
<link rel="stylesheet" href="css/ny.style.css">
<link rel="stylesheet" href="css/ny.responsive.css" media="(min-width: 576px)">
{% endblock %}


{% block blocks_inner %}
{% include '@ny/header/block.php' %}
{% include '@ny/main/block.php' %}
{% include '@ny/events/block.php' %}
{% include '@ny/about/block.php' %}
{% include 'bottom/block.php' %}
{% include 'footer/block.php' %}
{% endblock %}
