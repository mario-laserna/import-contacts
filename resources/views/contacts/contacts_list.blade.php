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
                    <table class="table-auto border-solid">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Birthdate</th>
                                <th>Phone number</th>
                                <th>Address</th>
                                <th>Credit Card</th>
                                <th>Franchise</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td class="border border-solid">{{ $contact->name }}</td>
                                    <td class="border border-solid">{{ $contact->birthdate }}</td>
                                    <td class="border border-solid">{{ $contact->phone_number }}</td>
                                    <td class="border border-solid">{{ $contact->address }}</td>
                                    <td class="border border-solid">{{ $contact->credit_card_last }}</td>
                                    <td class="border border-solid">{{ $contact->franchise }}</td>
                                    <td class="border border-solid">{{ $contact->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
