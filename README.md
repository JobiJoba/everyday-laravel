# Everyday Laravel!

Learning Laravel.

## Starter Template

-   Breeze with Volt Api (class) and Alpine
-   Dark mode
-   Pest

### Day 1

-   Install Laravel, launch the site, make sure it works, create a new page.

```php
Route::get('/new-page', function () {
    return view('new-page');
});
```

```bash
php artisan make:view new-page
```
