{% extends 'default.php' %}

{% set PAGE_CLASS = 'page-cases' %}


{% block styles %}
<link rel="stylesheet" href="css/cases.style.css">
<link rel="stylesheet" href="css/cases.responsive.css" media="(min-width: 576px)">
{% endblock %}


{% block blocks_inner %}
{% include 'header/block.php' %}

{% block blocks_inner_2 %}
{% include '@cases/@' + PAGE_DIR + '/main/block.php' %}
{% include '@cases/@' + PAGE_DIR + '/about/block.php' %}
{% include '@cases/@' + PAGE_DIR + '/video/block.php' %}
{% include '@cases/@' + PAGE_DIR + '/stats/block.php' %}
{% include '@cases/@' + PAGE_DIR + '/speakers/block.php' %}
{% include '@cases/@' + PAGE_DIR + '/gallery/block.php' %}
{% include '@cases/@' + PAGE_DIR + '/cases/block.php' %}
{% endblock %}

{% include 'bottom/block.php' %}
{% include 'footer/block.php' %}
{% endblock %}
