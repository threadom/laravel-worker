# laravel-worker

Laravel artisan is great but not really modulable.

Craft was supplanted by industry a long time ago.
Other terms appeared to qualify the personnel.
The craftman passing from the artisan to the worker.

Worker come with a folders and file architecture for modulable application.

/laravel_modules\
+->/<module_name>\
|    +->/<submodule_name --api>\
|    |    +->/queries\
|    |    |    +-><query_1>.sql\
|    |    |    +-><query_2>.sql\
|    |    |    +-><query_3>.sql\
|    |    +->migation.php\
|    |    +->model.php\
|    |    +->seeder.php\
|    |    +->factory.php\
|    |    +->controller.php\
|    +->/<submodule_name --list>\
|         +->/queries\
|         |    +-><query_1>.sql\
|         |    +-><query_2>.sql\
|         |    +-><query_3>.sql\
|         +->controller.php\
|         +->view.blade.php\
|         +->script.blade.php\
...
