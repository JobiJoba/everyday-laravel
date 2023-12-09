# Day 1

-   Install Laravel, launch the site, make sure it works, create a new page.

### With a view

```php
Route::get('/new-page', function () {
    return view('new-page');
});
```

```bash
php artisan make:view new-page
```

### Without a view

```php
Route::get('/new-page-no-view', function () {
    return
    '<html>
        <head>
            <title>New Page</title>
        </head>
        <body>
            <h1>New Page No View</h1>
        </body>';
});
```

### With a controller

Use

```bash
php artisan make:controller UserController
php artisan make:view users.index

public function index()
{
    return view('users.index');
}

```

I can't import automatically my UserController with Visual Studio Code into my web.php so I had to add this manually:

```php
use App\Http\Controllers\UserController;
```

I've an extension installed and I can use
^ + option + i

### With a parameters

I've added an integer parameters to my route called "anInteger"

```php
Route::get('/users/{anInteger}', [UserController::class, 'withInteger']);
```

I created a new method in my class called "withInteger" like this

```php
public function withInteger($anInteger)
{
return view('users.index',['anInteger' => $anInteger]);
}
```

Annoying point -- to go to the UserController class I cannot click on the method, I've to use the "spotlight" of visual studio code and write the class name.

To display the variable in the view I added:

```php
{{ $anInteger }}
```
