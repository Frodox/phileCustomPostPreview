Phile Custom Post Preview Plugin
======================

**category**: blog

Plugin allows to customize length of the post-preview text. It is implemented as
twig-filter, which looks for `<!--cut-here-->` html-tag and return only text before this tag.
If tag not found -- return all given text.
(smth like `<!--more-->` tag in WordPress)


## Installation


### Requirements

* php >= 5.3.0 (stristr)


### Install

Assuming you've already installed [Phile](https://github.com/PhileCMS/Phile).

1. Create a directory called `frodox` in the `plugins` folder
2. Download or clone this repo into the created folder (so you'll have a
   `plugins/frodox/phileCustomPostPreview` directory)
3. Add `$config['plugins']['frodox\\phileCustomPostPreview'] = array('active' => true);` to your `config.php`


### Setup theme

Apply this twig-filter (`custom_post_preview`) to needed (post-preview) text. It may looks like:

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

In `plugins/frodox/phileCustomPostPreview/config.php` file you can change:

* `'read_more_tag'` -- which tag mean `<!--more-->` tag. (`"<!--cut-here-->"` by default)
* `'read_more_text'` -- which text to add after cutted text. (`" &hellip;"` by default)


## License

GPL v3
