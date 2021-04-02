<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Files list
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto border-solid">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Path</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td class="border border-solid">{{ $file->name }}</td>
                                    <td class="border border-solid">{{ $file->status }}</td>
                                    <td class="border border-solid">{{ $file->path }}</td>
                                    <td class="border border-solid">{{ $file->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $files->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
