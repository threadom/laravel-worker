# laravel-worker

Laravel artisan is great but not really modulable.

Craft was supplanted by industry a long time ago.\
Other terms appeared to qualify the personnel.\
The craftman passing from the artisan to the worker.

Worker come with a folders and files structures for modulable application.

## structures :

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
|         +--> script.blade.php
|
...
</pre>

## usages :

<pre>php worker make:module ModuleName</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:submodule ModuleName/SubModuleName1 --api</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:submodule ModuleName/SubModuleName2 --view</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:submodule ModuleName/SubModuleName3 --view --model=SubModuleName1</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:route ModuleName</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:route ModuleName/SubModuleName</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:routes</pre>
> Command create necessary files for view into previous api folder of article.

## exemples :

<pre>php worker make:module Article</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:submodule Article/article --api</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:submodule Article/articles --view --model=article</pre>
> Command create necessary files for view into previous api folder of article.

<pre>php worker make:submodule Article/article --view --model=article</pre>
> Command create necessary files for view into previous api folder of article.
