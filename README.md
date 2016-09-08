# PageKit

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/2b15870b-8188-40ef-be16-96fea6a81bb9/mini.png)](https://insight.sensiolabs.com/projects/2b15870b-8188-40ef-be16-96fea6a81bb9) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/5decf43d0f574e7a833dacfda9ad676c)](https://www.codacy.com/app/shawnsandy04/pagekit?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=shawnsandy/pagekit&amp;utm_campaign=Badge_Grade)

PageKit is a quick and easy way to upgrade the standard Laravel install page with a clean and modern Starter website or default pages. Allowing you to deploy and launch a Laravel based static marketing / promotional site in minutes. While you focus on the prouduct design and development. 

![PageKit Screenshot](pagekit.png)


## Installation (traditional)

```

composer require shawnsandy/pagekit

```

__PageKitServiceProvider__

Add PageKitServiceProvider to the providers array in `config/app.php`

```php

ShawnSandy\PageKit\PageKitServiceProvider::class

```

__Publish the pagekit assets__

```php

php artisan vendor:publish --provider="ShawnSandy\PageKit\PageKitServiceProvider"

```

__Publish tags__

You can publish individual pagekit tags using `--tags`, *please note* that the `--pagekit-asssets` tag is required for page to display correctly. **BTW this is my preferred method of install**.

```php

php artisan vendor:publish --provider="ShawnSandy\PageKit\PageKitServiceProvider" --tag=name

```

or shortcut

```
php artisan vendor:publish --tag=name

```

**PageKit tags**

* `--tag=pagekit-assets` publishes your pagekit public assets / files to `/public/` 
* `--tag=pagekit-views` publishes your views to `vendor\pagekit`
* `--tag=pagekit-config` publishes `config\pagekit` to `config`

You can also use the `--force` to overwrite previously published files - `--tag=pagekit-assets --force`.

### Install for custom/package development 

To customize or use the package to start your own.

* Install [Laravel Packager](https://github.com/Jeroen-G/laravel-packager#laravel-packager) `composer require jeroen-g/laravel-packager`. Make sure to add the provider to your `config\app.php` provider array `eroenG\Packager\PackagerServiceProvider::class,`.
* Import the repository `php artisan packager:git https://github.com/shawnsandy/pagekit YourVendorName YourPackgeName`. This will create and download the package to `/packages/YourVendorName/YourPackageName`. It will also add your package to composer autoload parameter and add it to `config/app.php` provider array.
* Customize and push to you repo
* Enjoy
          



## Usage

Once installed correctly you should be able to goto  `http://yoursite.app/pagekit` 

### Default index page

Replace the default *welcome* page with the PageKit index by modifying your `app/Http/route.php` 

```php
Route::get('/', function () {
    return view('welcome');
});
```
*to*

```php
  Route::get('', function(){
        return view('page::index');
    });
```

### Custom Branding

You can custom brand pagekit by editing the values in the `config/pagekit.php` 

Turn branding on:

```php
'branding' => false,
``` 

Customize :

```php

'brand' => [
    'background-color' => '#FFFFFF',
    'header-background-color' => '#EEEEEE',
    'header-font-size' => '72px',
    'font-family' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
    'header-font-color' => '#eee',
    'footer-background-color' => '#333333',
    'footer-color' => '#FFFFFF',
    'header-color' => '#EEEEEE',
    'text-color' => 'FFFFFF',
    'header-background-image' => "https://static.pexels.com/photos/129569/pexels-photo-129569-large.jpeg",
    'logo' => false
]

```

**Custom Header**

```php
header-background-image' => "https://static.pexels.com/photos/129569/pexels-photo-129569-large.jpeg",

```

!['Costom Header Background'](pagekit-custom-header.png)

## TODO

- [x] Contact form
- [ ] Social media links
- [ ] Add a static page editor
- [ ] Addon style selectors
- [ ] Custom artisan command

## Contributing

Fork it!
Create your feature branch: git checkout -b my-new-feature
Commit your changes: git commit -am 'Add some feature'
Push to the branch: git push origin my-new-feature
Submit a pull request :D
History

## Change Log

Version 1.4.6 -- PageKit RC-1a

Prepping for official release

Full mail integration
Adds a admin dashboard template
Refactored the vendor publish tags to pagekit- prefix
Changed from font-awesome to Material-Icons
UI Updates
Bug Fixes



Version 1.3.7

Animate On Scroll Library install
- animates header and footer

Version 1.3.6 BETA

Adds Google Analytics js tracker to default view
Updates to PageKit config settings and readme

Version 1.3.5 BETA

Code analysis passed
Added to SensioLabsInsight for code analysis 
Fixes issues with style rendering for custom branding options

Version 1.3.4 BETA 

Adds a Branding feature

Customize fonts, color, background image etc from the config/pagekit.php file
Updates the readme

Version 1.3.3

...

Version 1.3.2 BETA

- Removes several composer packages


Version 1.3.1 BETA

- Added package config file
- Updated the read-me
- Minor changes to layout/views 



## License

TODO: Modify [licence.md](LICENCE.md)


This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
