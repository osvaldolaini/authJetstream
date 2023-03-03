<div class="flex space-x-2 justify-center py-1" >
    <button {{
        $attributes->merge([
            'type' => 'submit',
            'data-mdb-ripple'=>'true',
            'data-mdb-ripple-color'=>'light',
            'class' => 'imb-2 mt-1.5 w-full inline-block px-6 py-3
            bg-blue-800 dark:bg-blue-200 border border-transparent rounded-md
            font-semibold text-xs text-white dark:text-blue-800 uppercase
            tracking-widest hover:bg-blue-700 dark:hover:bg-white focus:bg-blue-700
            dark:focus:bg-white active:bg-blue-900 dark:active:bg-blue-300
            focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
            dark:focus:ring-offset-blue-800 transition ease-in-out duration-150']) }}>
            {{ $slot }}
        </button>
</div>
