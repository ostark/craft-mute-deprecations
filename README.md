# Mute Craft Deprecations in production

If `'devMode' => false` in `config/general.php` deprecations logging is disabled.

## Install

Require the package:
```
composer require ostark/craft-mute-deprecations
```

## Uwaga!

*Try to remove all deprecation errors before launching your site.*

The benefits of this package are very limited. It is an example how to use Yii extensions with Craft instead of a Plugin.

With this `extra` option in the `composer.json` you hook into Yii's bootstrapping process:
 
```
"extra": {
    "bootstrap": "ostark\\MuteDeprecations\\Bootstrap"
}
```
