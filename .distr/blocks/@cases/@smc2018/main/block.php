{% from './data.php' import data %}
{% from 'main/macro.php' import block %}

{{ block( data, PAGE_DIR ) }}
