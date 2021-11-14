<div id="{{$name}}" class="flex flex-no-wrap mb-2">
    <button type="button"
        class="w-4/12 text-left whitespace-nowrap rounded-md px-2 py-2 text-sm font-medium text-gray-200 hover:text-gray-50 bg-gray-800 hover:bg-gray-700 overflow-hidden truncate">
        {{$text}}
    </button>
    <div class="progress inline-block w-7/12 bg-gray-200 rounded-full h-3 mx-2 my-3">
        <div class="bg-gray-800 h-3 rounded-full" style="width: 0%"></div>
    </div>
    <div
        class="percent w-1/12 text-right whitespace-nowrap rounded-md px-2 py-2 text-sm font-medium text-gray-200 bg-gray-700">
        0 %
    </div>
    <a href="/help/{{$type}}/{{$name}}"
        class="text-left whitespace-nowrap rounded-md ml-2 px-2 py-2 text-sm font-medium text-gray-200 hover:text-gray-50 bg-gray-800 hover:bg-gray-700 overflow-hidden truncate"
        aria-current="page">
        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
    </a>
</div>