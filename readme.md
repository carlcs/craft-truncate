# Truncate plugin for Craft CMS

Provides a Twig filter to cut off a string after limit is reached. It counts single characters, but you can configure the filter to preserve whole words. This makes the length of the truncated string very predictable, even for short length settings.


## Installation

To install the plugin, copy the truncate/ folder into craft/plugins/. Then go to Settings → Plugins and click the "Install" button next to "Truncate".


## Twig filters

### truncate( length, preserve, separator )

```html
{{ "This is some very long text and it is causing a lot of problems."|truncate(25, true) }}

{# outputs "This is some very long text..." #}
```

#### Arguments

- **`length`** (required) – The max. number of characters after a string gets cut off.

- **`preserve`** – Makes the filter preserve whole words. (Default `false`)

- **`separator`** – The characters to be appended to the truncated string (Default `'...'`)


  [1]: http://twig.sensiolabs.org/doc/extensions/text.html
