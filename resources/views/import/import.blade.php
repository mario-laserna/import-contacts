<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form action="{{ route('import.post') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Email Address -->

                        <div class="mt-4">
                            Please, choose a file to upload

                            <x-input id="csv_file" class="block mt-1 w-full" type="file" name="csv_file" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                Import
                            </x-button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
