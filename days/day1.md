# Day 1

-   Install Laravel, launch the site, make sure it works.
-   Create a view and play with the router, with parameters, etc
-   Play with controller also

## Summary

Everything with route happen in Web.php
Create a route for every new page

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

### Is a variable set?

I've added a variable $anInteger in my view, but I reuse the same view (index) for the path /users and /users/{anInteger}.

I had a crash because it's not defined in users so I've to use the following code:

```php
@isset($anInteger)
    {{ $anInteger }}
@else
    The variable $anInteger is not defined.
@endisset
```

### Alias

Not really related directly but i've created an alias for php artisan (ar) it shorten a bit the command :)

### Route:view vs Route::get

route::get if we use a controller to associated with a Get method of this controller and we need to execute logic before (ex go into the database)

route::view if we only use a view
Perfect for static page
