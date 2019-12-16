# Emoji converter For Laravel
### About

- The `laravel-emoji-converter` package allows you to encode and decode ios, android emojis to save it in you data base.

### Installation

Require the `achrafboudawara95/laravel-emoji-converter` package in your composer.json and update your dependencies:

    composer composer require achraf/laravel-emoji-converter

<!-- php artisan vendor:publish --tag=laravel-emoji-converter-config -->

### Global usage

###### To import package
```php
use Achraf\laravelEmojiConverter\LaravelEmojiConverter;
```
###### To encode emoji
```php
$encodedEmoji = LaravelEmojiConverter::Encode('😄,hi')
```

###### To decode emoji
```php
$decodedEmoji = LaravelEmojiConverter::Decode('\ud83d\ude04,hi')
```
