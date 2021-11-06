# laravel-worker

Laravel artisan is great but not really modulable.

Craft was supplanted by industry a long time ago.\
It's time to change the role of staff member.\
The craftman become from the artisan to the worker.\
Industry is not better than crafting, but more productive.

Worker come with a new folders and files structures for modulables applications.

## Structures

<pre>/modules
+--> /&lt;module_name&gt;
    +--> &lt;module_name&gt;Routes.php
    +--> /&lt;submodule_name --object&gt;
    |    +--> /queries
    |    |    +-> create.sql
    |    |    +-> replace.sql
    |    |    +-> update.sql
    |    |    +-> delete.sql
    |    +--> &lt;submodule_name&gt;ObjectMigration.php
    |    +--> &lt;submodule_name&gt;ObjectModel.php
    |    +--> &lt;submodule_name&gt;ObjectSeeder.php
    |    +--> &lt;submodule_name&gt;ObjectFactory.php
    |    +--> &lt;submodule_name&gt;ObjectAPI.php
    |    +--> &lt;submodule_name&gt;ObjectController.php
    |    +--> &lt;submodule_name&gt;ObjectView.blade.php
    |    +--> &lt;submodule_name&gt;ObjectScript.ts
    |
    +--> /&lt;submodule_name --list&gt;
    |    +--> /queries
    |    |    +--> select.sql
    |    +--> &lt;submodule_name&gt;ListAPI.php
    |    +--> &lt;submodule_name&gt;ListController.php
    |    +--> &lt;submodule_name&gt;ListView.blade.php
    |    +--> &lt;submodule_name&gt;ListScript.ts
</pre>

## Usages

All successful commands verify if modules folder exist.

Create folders and files for the module.
> <pre>php worker make:module ModuleName</pre>

Create folders and files for the submodule. (api and view)
> <pre>php worker make:submodule ModuleName/SubModuleName1 --object</pre>
> <pre>php worker make:submodule ModuleName/SubModuleName1 --list</pre>

Create a routing file with entry points for APIs and views of every modules and submodules.
> <pre>php worker make:routes</pre>

Create a routing file with entry points for APIs and views for a module and its submodules.
> <pre>php worker make:routes ModuleName</pre>

## Examples

Create a module named Article
> <pre>php worker make:module Article</pre>
<pre><b>/modules
+--> /Article
</b></pre>

Create a object submodule article in module article
> <pre>php worker make:submodule Article/article --object</pre>
<pre>/modules
+--> /Article<b>
    +--> /article
        +--> /queries
        |    +-> create.sql
        |    +-> read.sql
        |    +-> update.sql
        |    +-> delete.sql
        +--> ArticleObjectMigration.php
        +--> ArticleObjectModel.php
        +--> ArticleObjectSeeder.php
        +--> ArticleObjectFactory.php
        +--> ArticleObjectAPI.php
        +--> ArticleObjectController.php
        +--> ArticleObjectView.blade.php
        +--> ArticleObjectScript.ts
</b></pre>

Create a object submodule article in module article
> <pre>php worker make:submodule Article/articles --list</pre>
<pre>/modules
+--> /Article<b>
    +--> /articles
        +--> /queries
        |    +-> select.sql
        +--> ArticlesListAPI.php
        +--> ArticlesListController.php
        +--> ArticlesListView.blade.php
        +--> ArticlesListScript.ts
</b></pre>

> <pre>php worker make:routes</pre>
<pre>/modules
+--> /Article<b>
    +--> ArticleRoutes.php</b>
    +--> /article
        +--> /queries
        |    +-> create.sql
        |    +-> read.sql
        |    +-> update.sql
        |    +-> delete.sql
        +--> ArticleObjectMigration.php
        +--> ArticleObjectModel.php
        +--> ArticleObjectSeeder.php
        +--> ArticleObjectFactory.php
        +--> ArticleObjectAPI.php
        +--> ArticleObjectController.php
        +--> ArticleObjectView.blade.php
        +--> ArticleObjectScript.ts
    +--> /articles
        +--> /queries
        |    +-> select.sql
        +--> ArticlesListAPI.php
        +--> ArticlesListController.php
        +--> ArticlesListView.blade.php
        +--> ArticlesListScript.ts
</pre>

## Deprecated

### Structures

<pre>/modules
+--> /&lt;module_name&gt;
    +--> /&lt;submodule_name --api --object&gt;
    |    +--> /queries
    |    |    +-> create.sql
    |    |    +-> replace.sql
    |    |    +-> update.sql
    |    |    +-> delete.sql
    |    +--> &lt;submodule_name&gt;ObjectMigration.php
    |    +--> &lt;submodule_name&gt;ObjectModel.php
    |    +--> &lt;submodule_name&gt;ObjectSeeder.php
    |    +--> &lt;submodule_name&gt;ObjectFactory.php
    |    +--> &lt;submodule_name&gt;ObjectAPI.php
    |
    +--> /&lt;submodule_name --view --object&gt;
    |    +--> &lt;submodule_name&gt;ObjectController.php
    |    +--> &lt;submodule_name&gt;ObjectView.blade.php
    |    +--> &lt;submodule_name&gt;ObjectScript.ts
    |
    +--> /&lt;submodule_name --api --list&gt;
    |    +--> /queries
    |    |    +-> select.sql
    |    +--> &lt;submodule_name&gt;ListAPI.php
    |
    +--> /&lt;submodule_name --view --list&gt;
         +--> &lt;submodule_name&gt;ListController.php
         +--> &lt;submodule_name&gt;ListView.blade.php
         +--> &lt;submodule_name&gt;ListScript.ts
</pre>

### Usages

Create folders and "api" files for the submodule.
> <pre>php worker make:submodule ModuleName/SubModuleName2 --api --object</pre>
> <pre>php worker make:submodule ModuleName/SubModuleName2 --api --list</pre>

Create folders and "view" files for the submodule.
> <pre>php worker make:submodule ModuleName/SubModuleName3 --view --object</pre>
> <pre>php worker make:submodule ModuleName/SubModuleName3 --view --list</pre>

### Examples

Create a object api submodule article in module Article
> <pre>php worker make:submodule Article/article --api --object</pre>
<pre>/modules
+--> /Article<b>
    +--> /article
        +--> /queries
        |    +-> create.sql
        |    +-> read.sql
        |    +-> update.sql
        |    +-> delete.sql
        +--> ArticleObjectMigration.php
        +--> ArticleObjectModel.php
        +--> ArticleObjectSeeder.php
        +--> ArticleObjectFactory.php
        +--> ArticleObjectAPI.php
</b></pre>

Create a object view submodule article in module Article
> <pre>php worker make:submodule Article/article --view --object</pre>
<pre>/modules
+--> /Article<b>
    +--> /article
        +--> ArticleObjectController.php
        +--> ArticleObjectView.blade.php
        +--> ArticleObjectScript.ts
</b></pre>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
