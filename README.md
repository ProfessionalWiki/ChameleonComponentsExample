# ChameleonComponentsExample

Example MediaWiki extension to show how to define extra components for the [Chameleon skin](https://github.com/ProfessionalWiki/chameleon).

**This extension is not meant to be used directly.** It should be forked or downloaded and then modified to suit your own requirements.

To load this extension, add the following in `LocalSettings.php`:
```php
wfLoadExtension( 'ChameleonComponentsExample' );
```

## Example: Hello World

The [`HelloWorld`](src/Components/HelloWorld.php) component simply prints "Hello World!".

To use the `HelloWorld` component in a layout, add the following:
```xml
<component type="HelloWorld" />
```

## Example: System message with additional ResourceLoader modules

The [`Sidebar`](src/Components/Sidebar.php) component displays a system message `MyMenu` and also loads the SimpleBatchUpload ResourceLoader module.

To use the `Sidebar` component in a layout, add the following:
```xml
<component type="Sidebar" />
```

## Adding more components

Add a new PHP class in [`src/Components`](src/Components). Make sure the filename and the class name match.
Add another line in [`extension.json`](extension.json) under `AutoloadClasses` and reference your new class:
```json
"AutoloadClasses": {
	"Skins\\Chameleon\\Components\\MyComponent": "src/Components/MyComponent.php"
},
```
