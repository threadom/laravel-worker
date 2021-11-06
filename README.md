# laravel-worker

Laravel artisan is great but not really modulable.

Craft was supplanted by industry a long time ago.\
It's time to change the role of staff member.\
The craftman become from the artisan to the worker.\
Industry is not better than crafting, but more productive.

Worker come with a folders and files structures for modulables applications.

## Structures

<pre>
/laravel_modules
+--> /module_name
|    +--> /submodule_name --api
|    |    +--> /queries
|    |    |    +-> query_1.sql
|    |    |    +-> query_2.sql
|    |    |    +-> query_3.sql
|    |    +--> migration.php
|    |    +--> model.php
|    |    +--> seeder.php
|    |    +--> factory.php
|    |    +--> apicontroller.php
|    |
|    +--> /submodule_name --view
|         +--> /queries
|         |    +--> query_1.sql
|         |    +--> query_2.sql
|         |    +--> query_3.sql
|         +--> controller.php
|         +--> view.blade.php
|         +--> script.ts
|
...
</pre>

## Usages

> All successful commands verify if modules folder exist.

<pre>php worker make:module ModuleName</pre>
> Create folders and files for the module.

<pre>php worker make:submodule ModuleName/SubModuleName1</pre>
> Create folders and files for the submodule. (api and view)

<pre>php worker make:submodule ModuleName/SubModuleName2 --api</pre>
> Create folders and "api" files for the submodule.

<pre>php worker make:submodule ModuleName/SubModuleName3 --view</pre>
> Create folders and "view" files for the submodule.

<pre>php worker make:route ModuleName</pre>
> Create a routing file with entry points for APIs and views of the module and submodules.

<pre>php worker make:route ModuleName/SubModuleName</pre>
> Create a routing file with entry points for API and view of the submodule.

<pre>php worker make:routes</pre>
> Create a routing file with entry points for APIs and views of every modules and submodules.

## Exemples

> <pre>php worker make:module Article</pre>
<pre>
/laravel_modules
+--> /module_name
...
</pre>

> <pre>php worker make:submodule Article/article --api</pre>
<pre>
/laravel_modules
+--> /module_name
    +--> /submodule_name --api
        +--> /queries
        |    +-> create.sql
        |    +-> update.sql
        |    +-> delete.sql
        |    +-> read.sql
        +--> migration.php
        +--> model.php
        +--> seeder.php
        +--> factory.php
        +--> apicontroller.php
...
</pre>

> <pre>php worker make:submodule Article/articles --view</pre>
<pre>
/laravel_modules
+--> /module_name
    +--> /submodule_name --api
        +--> /queries
        |    +-> query_1.sql
        +--> controller.php
        +--> view.blade.php
        +--> script.ts
...
</pre>

<pre>php worker make:submodule Article/article --view --model=article</pre>
> Create files for view into previous api folder of article.

<pre>php worker make:routes</pre>
> Create files for view into previous api folder of article.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
