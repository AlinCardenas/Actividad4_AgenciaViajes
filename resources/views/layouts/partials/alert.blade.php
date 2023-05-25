@if(Session::has('alert_message'))
    <div x-data="{ showAlert: true }">
        <div x-show="showAlert" class="fixed z-10 inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
            <div x-show="showAlert" class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto">
                <div class="rounded-lg shadow-xs overflow-hidden">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm leading-5 font-medium text-gray-900">{{ Session::get('alert_message') }}</p>
                            </div>
                            <div class="ml-4 flex-shrink-0 flex">
                                <button @click="showAlert = false" class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9.586l3.536-3.536a2 2 0 1 1 2.828 2.828L12.828 12l3.536 3.536a2 2 0 1 1-2.828 2.828L10 14.828l-3.536 3.536a2 2 0 1 1-2.828-2.828L7.172 12 3.636 8.464a2 2 0 1 1 2.828-2.828L10 9.172z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
