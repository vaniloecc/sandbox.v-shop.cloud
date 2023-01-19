# %%shop_name%% Shop Template

Welcome to %%shop_name%%!

This Documentation is written for software developers building ecommerce sites with Vanilo Cloud.

## Repository Contents

The repository has files and folder that have the same [structure](https://laravel.com/docs/8.x/structure)
and role as a Laravel application. It only contains a small subset of Laravel per-se as the code
is being run and managed by Vanilo Cloud.   

### The config folder

The config folder contains `vanilo.json` that is the low level configuration of your shop.
If you're coming from Laravel and/or the Open Source version of vanilo, then consider this as the
managed sister of `config/vanilo.php` in your Laravel application.

### The public folder

Similarly to Laravel, this folder contains the static files that are accessible from within your
shop.

### The resources folder

The `resources` directory contains your views and houses all of your language files.

Yes, you can still place here your raw, un-compiled assets such as CSS or JavaScript.
