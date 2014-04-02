Phile Custom Post Preview Plugin
======================

**category**: blog

Plugin allows to customize length of the post-preview text. It is implemented as
twig-filter, which looks for `<!--cut-here-->` html-tag and return only text before this tag.
If tag not found -- return all givent text. (smth like `<!--more-->` tag in WordPress)


## Installation


### Requirements

* php >= 5.3.0 (stristr)


### Install

* Install [Phile](https://github.com/PhileCMS/Phile)
* Clone this repo into `plugins/phileCustomPostPreview`
* add `$config['plugins']['phileCustomPostPreview'] = array('active' => true);` to your `config.php`


### Setup theme

Apply this twig-filter to needed (post-preview) text. It may looks like:

```html
{% for page in pages %}
{% if page.meta.date %}
	<div class="post">

		<h2><a href="{{ page.url }}">{{ page.meta.title }}</a></h2>
		<div class="excerpt">{{ page.content|custom_post_preview }}</div>

	</div>
{% endif %}
{% endfor %}
```

## Configuration

In `config.php` file, you can change:

* `'read_more_tag'` -- which tag mean `<!--more-->` tag. (`"<!--cut-here-->"` by default)
* `'read_more_text'` -- which text to add after cutted text. (`" &hellip;"` by default)


## License

GPL v3
