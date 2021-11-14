@include('themes.'.$app_theme.'.partials.topbar')
<div class="p-2 w-full h-full">
    <div class="grid w-full h-full bg-blue-500 overflow-hidden">
        <div class="inline-block w-full bg-blue-400 pl-4 h-10">
            <div class="inline-block float-left align-middle justify-center text-sm font-medium h-10 leading-10">
                <a href="#" class="text-blue-50 align-middle font-medium whitespace-nowrap">Article
                    123456</a>
            </div>
            <div class="inline-block float-right align-middle justify-center text-sm font-medium h-10 leading-10">
                <div class="flex">
                    <a href="#create" class="inline-block bg-btn-create">
                        <img class="lg:inline m-1 h-8 w-8 align-top " src="/app.png">
                    </a>
                    <a href="#read" class="inline-block bg-btn-read">
                        <img class="lg:inline m-1 h-8 w-8 align-top" src="/app.png">
                    </a>
                    <a href="#update" class="inline-block bg-btn-update">
                        <img class="lg:inline m-1 h-8 w-8 align-top" src="/app.png">
                    </a>
                    <a href="#delete" class="inline-block bg-btn-delete">
                        <img class="lg:inline m-1 h-8 w-8 align-top" src="/app.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="p-2">
            <form>
                <div class='inline-grid bg-blue-400 p-1'>
                    <fieldset class='bg-blue-300 h-10 inline-block'>
                        <label class='m-2 h-6 w-32' for="id_article">Référence Interne :</label>
                        <input class='m-2 h-6 w-32 bg-blue-200 text-right' disabled type="text" name="ref_interne" id="ref_interne">
                    </fieldset>
                    <fieldset class='bg-blue-300 h-10 inline-block'>
                        <label class='m-2 h-6 w-32' for="id_article">Désignation :</label>
                        <input class='m-2 h-6 w-64 bg-blue-200 text-center' disabled type="text" name="designation" id="designation">
                    </fieldset>
                    <fieldset class='bg-blue-300 h-10 inline-block'>
                        <label class='m-2 h-6 w-32' for="id_article">Référence Client :</label>
                        <input class='m-2 h-6 w-48 bg-blue-200 text-right' disabled type="text" name="ref_client" id="ref_client">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
