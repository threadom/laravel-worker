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
|    +--> <module_name>Routes.php
|    +--> /submodule_name --api
|    |    +--> /queries
|    |    |    +-> create.sql
|    |    |    +-> replace.sql
|    |    |    +-> update.sql
|    |    |    +-> delete.sql
|    |    +--> <submodule_name>Migration.php
|    |    +--> <submodule_name>Model.php
|    |    +--> <submodule_name>Seeder.php
|    |    +--> <submodule_name>Factory.php
|    |    +--> <submodule_name>APICRUD.php
|    |
|    +--> /submodule_name --view
|    |    +--> <submodule_name>Controller.php
|    |    +--> <submodule_name>View.blade.php
|    |    +--> <submodule_name>Script.ts
|    |
|    +--> /submodule_name --list
|    |    +--> /queries
|    |    |    +--> query_1.sql
|    |    +--> <submodule_name>Controller.php
|    |    +--> <submodule_name>View.blade.php
|    |    +--> <submodule_name>Script.ts
|    |    +--> <submodule_name>APIList.php
...
</pre>

## Usages

> All successful commands verify if modules folder exist.

<pre>php worker make:module ModuleName</pre>
> Create folders and files for the module.

<pre>php worker make:submodule ModuleName/SubModuleName2 --api</pre>
<pre>php worker make:submodule ModuleName/SubModuleName2 --api --object</pre>
<pre>php worker make:submodule ModuleName/SubModuleName2 --api --list</pre>
> Create folders and "api" files for the submodule.

<pre>php worker make:submodule ModuleName/SubModuleName3 --view</pre>
> Create folders and "view" files for the submodule.

<pre>php worker make:submodule ModuleName/SubModuleName1 --object</pre>
<pre>php worker make:submodule ModuleName/SubModuleName1 --list</pre>
> Create folders and files for the submodule. (api and view)

<pre>php worker make:route ModuleName</pre>
> Create a routing file with entry points for APIs and views of the module and submodules.

<pre>php worker make:routes</pre>
> Create a routing file with entry points for APIs and views of every modules and submodules.

## Exemples

> <pre>php worker make:module Article</pre>
<pre>
/modules
+--> /Article
</pre>

> <pre>php worker make:submodule Article/article --api</pre>
<pre>
/modules
+--> /Article
    +--> /article
        +--> /queries
        |    +-> create.sql
        |    +-> read.sql
        |    +-> update.sql
        |    +-> delete.sql
        +--> ArticleMigration.php
        +--> ArticleModel.php
        +--> ArticleSeeder.php
        +--> ArticleFactory.php
        +--> ArticleAPICRUD.php
</pre>

> <pre>php worker make:submodule Article/article --view</pre>
<pre>
/modules
+--> /Article
    +--> /article
        +--> ArticleController.php
        +--> ArticleView.blade.php
        +--> ArticleScript.ts
</pre>

> <pre>php worker make:submodule Article/article</pre>
<pre>
/modules
+--> /Article
    +--> /article
        +--> /queries
        |    +-> create.sql
        |    +-> read.sql
        |    +-> update.sql
        |    +-> delete.sql
        +--> ArticleMigration.php
        +--> ArticleModel.php
        +--> ArticleSeeder.php
        +--> ArticleFactory.php
        +--> ArticleAPIObject.php
        +--> ArticleController.php
        +--> ArticleView.blade.php
        +--> ArticleScript.ts
</pre>

> <pre>php worker make:submodule Article/articles --list</pre>
<pre>
/modules
+--> /Article
    +--> /articles
        +--> /queries
        |    +-> select.sql
        +--> ArticlesController.php
        +--> ArticlesView.blade.php
        +--> ArticlesScript.ts
        +--> ArticlesAPIList.php
</pre>

> <pre>php worker make:routes</pre>
<pre>
/modules
+--> /Article
    +--> ArticleRoutes.php
    +--> /article
        +--> /queries
        |    +-> create.sql
        |    +-> read.sql
        |    +-> update.sql
        |    +-> delete.sql
        +--> ArticleMigration.php
        +--> ArticleModel.php
        +--> ArticleSeeder.php
        +--> ArticleFactory.php
        +--> ArticleAPIObject.php
        +--> ArticleController.php
        +--> ArticleView.blade.php
        +--> ArticleScript.ts
    +--> /articles
        +--> /queries
        |    +-> select.sql
        +--> ArticlesController.php
        +--> ArticlesView.blade.php
        +--> ArticlesScript.ts
        +--> ArticlesAPIList.php
</pre>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
