# Mute Craft deprecations in production

When migrating a site from Craft 2 to Craft 3, you will notice things [changed in the templates](https://docs.craftcms.com/v3/changes-in-craft-3.html#template-functions). Twig tags got renamed and variable access is slightly different - they old way is usually still supported, but is marked as "deprecated".

This extension prevents Craft from logging deprecation errors if `'devMode' => false` in `config/general.php`. 
It speeds up your site by reducing overhead of tracing the code and logging to the database.

**Notice: Do not simply mute deprecation errors, remove them as soon as possible.**


## Why?

The benefits of this package are very limited. It is rather an example of how to use a Yii extension with Craft instead of a Plugin.

With this `extra` option in the `composer.json` you hook into Yii's bootstrapping process:
 
```
"extra": {
    "bootstrap": "ostark\\MuteDeprecations\\Bootstrap"
}
```

In the [Bootstrap class](https://github.com/ostark/craft-mute-deprecations/blob/master/src/Bootstrap.php), you learn how to access the `Craft::$app` instance, to use services and to swap out a Craft core component from the container.


## Links

* https://www.yiiframework.com/doc/guide/2.0/en/structure-extensions
* https://docs.craftcms.com/v3/plugin-intro.html

## Install

Require the package:
```
composer require ostark/craft-mute-deprecations
```
