{% macro form( form_id, form_class='', title_class='', button_class='', title='', button='Отправить бриф', form_text, add_fields, exclude_fields, short_form=false ) %}
<form class="form {{ form_class | safe }}" action="<?= $action ?>&amp;form={{ form_id | safe }}">

	{% if title %}
	<div class="form__title {{ title_class | safe }}">{{ title | safe }}</div>
	{% endif %}

	{% if form_text %}
	<div class="form__text">{{ form_text | safe }}</div>
	{% endif %}

	{{ form_items(exclude_fields, add_fields, button, button_class ) }}

	{% if link %}
	<input name="link" type="hidden" value="{{ link | safe }}">
	{% endif %}

	<input name="form" type="hidden" value="{{ form_id | safe }}">

</form><!-- form -->
{% endmacro %}


{% macro form_items(exclude_fields, add_fields, button, button_class ) %}
<div class="form__items">

	{% if not short_form %}
	{{ form_item( 'comments[Компания]', 'text', 'Компания', true ) }}
	{% endif %}

	{% if not exclude_fields.name %}
	{{ form_item( 'name', 'text', 'Имя', true ) }}
	{% endif %}

	{% if not exclude_fields.phone %}
	{{ form_item( 'phone', 'text', 'Телефон', true ) }}
	{% endif %}

	{% if not exclude_fields.email %}
	{{ form_item( 'email', 'email', 'Почта', true ) }}
	{% endif %}

	{% if not short_form %}
	{{ form_item( 'comments[Ссылка на документ]', 'text', 'Вставить ссылку на документ', true, class='form__item_wide' ) }}
	{{ form_item( 'comments[Комментарий]', 'textarea', 'Комментарий', false, class='form__item_wide' ) }}
	{% endif %}

	{% if add_fields.length %}
	{% for item in add_fields %}
	{{ form_item( item.name, item.type, item.placeholder, item.required, item.value, item.options, item.attr ) }}
	{% endfor %}
	{% endif %}

	<div class="form__footer">
		<label>
			<div class="form__footer-checkbox">
				<input type="checkbox" name="personalDataAgree" checked>
				<div class="form__footer-checkbox-icon"></div>
			</div><!-- form__footer-checkbox -->
			<div class="form__footer-text">Нажимая на&nbsp;кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь с&nbsp;<a href="#privacy" class="fancybox privacy"><b>Политикой конфиденциальности</b></a>.</div>
		</label>
	</div><!-- form__footer -->

	<div class="form__item form__item_button">
		<button class="form__button button {{ button_class }}" type="submit">{{ button | safe }}</button>
	</div><!-- form__item -->

</div><!-- form__items -->
{% endmacro %}


{% macro form_item(name, type, placeholder, required, value, options, attr, class) %}
<div class="form__item form__item_{{ type }} {{ 'd-none' if type == 'hidden' }} {{ class }}" data-name="{{ name }}">
	{% if type == 'textarea' %}

	<textarea name="{{ name }}" placeholder="{{ placeholder | safe }}" class="form__input form__input_textarea" {{ 'required' if required }} {{ attr | safe }}></textarea>

	{% elseif type == 'select' %}

	<select name="{{ name }}" class="form__input" {{ 'required' if required }} {{ attr | safe }}>
		<option value="" disabled selected>{{ placeholder | safe }}</option>
		{% for option in options %}
		<option value="{{ option.value | safe }}">{{ option.text }}</option>
		{% endfor %}
	</select>

	{% else %}

	{% if type == 'number' %}<label class="form__item-label"><span class="form__item-label-text">{{ placeholder | safe }}</span>{% endif %}
		<input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder | striptags | safe }}" value="{{ value | safe }}" class="form__input brd" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} {{ attr | safe }}>
	{% if type == 'number' %}</label>{% endif %}

	{% endif %}
</div><!-- form__item -->
{% endmacro %}
