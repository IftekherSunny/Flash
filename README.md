## Flash

Flash helps you to add flash messages to your PHP application.

## Installation Process

Just copy Flash folder somewhere into your project directory. Then include flash autoloader.

```php
 require_once('/path/to/Flash/autoload.php');
```

Flash is also available via Composer/Packagist.

```
 composer require sun/flash
```

#### Flash Message View Installation Process

If you install flash manually, just add this line where you want to show flash message.

```php
 include('/path/to/Flash/view/flash.php');
```
If you install flash via composer, You need to publish flash message view. To publish flash message view -

```php
 php vendor/sun/flash/publish
```

Then, include this view where you want to show flash message.

```php
 include('view/Flash_Message.php);
```

In Flash message view I used Bootstrap css framework for flash message styling. You also need to add bootstrap to your project. 

###### Bootstrap css, js and jQuery cdn 
```html
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
```

Add this line at the bottom of your page
 
 ```html
 <script>
     $(function () {
         $('.flash-modal').modal();
 
     })
 </script>
 ```

## All Methods

###### To show success message

```php
$flash = new Sun\Flash;
$flash->success('Hello');
```

###### To show error message

```php
$flash->error('Whoops! There were some problems with your input.');
```

###### To show info message

```php
$flash->info('your message');
```

###### To show warning message

```php
$flash->warning('your message');
```

###### To show confirm message

```php
$flash->confirm('Message Title', 'Your Message');
```

###### To show bootstrap modal popup message

```php
$flash->overlay(
                 'Message Title',
                 'Your Message',
                 true,
                 'Allow Button Text',
                 'Allow Button Type',
                 'Dismiss Button Text',
                 'Dismiss Button Type
                 );
```

Defalut value for --

```
 Submit Button = false
 Allow Button Text = Save
 Allow Button Type = success
 Dismiss Button Text = Close
 Dismiss Button Type = default
```

## License

This package is licensed under the [MIT License](https://github.com/IftekherSunny/flash/blob/master/LICENSE)