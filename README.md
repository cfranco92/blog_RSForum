# commands
## Post
$ php artisan make:model Post -mfc
$ composer require cviebrock/eloquent-sluggable

Paste in post model:
```php
    use Cviebrock\EloquentSluggable\Sluggable;
```

$ php artisan migrate --seed

## Creating posts views
$ php artisan make:controller PageController

## Bootsrap configuration
$ npm install
$ npm run dev