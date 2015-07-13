## Session

[![Total Downloads](https://poser.pugx.org/sun/session/downloads)](https://packagist.org/packages/sun/session) [![Latest Stable Version](https://poser.pugx.org/sun/session/v/stable)](https://packagist.org/packages/sun/session)  [![Latest Unstable Version](https://poser.pugx.org/sun/session/v/unstable)](https://packagist.org/packages/sun/session) [![License](https://poser.pugx.org/sun/session/license)](https://packagist.org/packages/sun/session)

Session helps you to manage your session data easily.

## Installation Process

Just copy Session folder somewhere into your project directory. Then include session autoloader.

```php
 require_once('/path/to/Session/autoload.php');
```

Session is also available via Composer/Packagist.

```
 composer require sun/session
```

## All Methods

###### To store session data

```php
$session = new Sun\Session;
$session->create('login', 'username');
```

###### To get session data

```php
$session->get('login');
```

You can also set default value for session get method.

```php
$session->get('login', 'users');
```

###### To delete session data

```php
$session->get('login');
```

###### To check session exists

```php
$session->has('login');
```

###### To pull session data

The pull method retrieve session data then delete this session immediately.

```php
$session->pull('login');
```

You can also set default value for session pull method.

```php
$session->pull('login','users');
```
###### To push session data into session array

```php
$session->push('login', ['user']);
```

###### To pop session data from session array

```php
$session->pop('login');
```

###### To shift session data from session array

```php
$session->shift('login');
```

###### To destroy all session data

```php
$session->destroy();
```

## License

This package is licensed under the [MIT License](https://github.com/IftekherSunny/session/blob/master/LICENSE)
