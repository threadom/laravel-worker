# laravel-worker

Laravel artisan is great but not really modulable.

Craft was supplanted by industry a long time ago.\
Other terms appeared to qualify the personnel.\
The craftman passing from the artisan to the worker.

Worker come with a folders and file architecture for modulable application.

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

usage :

<pre>php worker make:module ModuleName</pre>
<pre>php worker make:submodule ModuleName/SubModuleName1 --api</pre>
<pre>php worker make:submodule ModuleName/SubModuleName2 --view</pre>
<pre>php worker make:submodule ModuleName/SubModuleName3 --view --model=SubModuleName1</pre>

exemple :

<pre>php worker make:module Article</pre>
<pre>php worker make:submodule Article/article --api</pre>
<pre>php worker make:submodule Article/articles --view --model=article</pre>



