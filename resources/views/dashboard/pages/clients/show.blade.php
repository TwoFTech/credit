@extends('dashboard.layouts.master')

@section('content')
<div class="container" style="min-height: 80vh; padding-top: 100px;">
        <h1 class="text-2xl font-semibold text-blue-600 mb-6" style="color: blue">Liste des clients</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div class="overflow-x-auto mb-6"> <!-- Ajout d'un margin en bas -->
            <table class="min-w-full bg-white border border-gray-200 rounded shadow">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border">Nom</th>
                        <th class="py-2 px-4 border">Email</th>
                        <th class="py-2 px-4 border">Date d'inscription</th>
                        <th class="py-2 px-4 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr class="hover:bg-gray-100 transition duration-150 ease-in-out">
                            <td class="py-2 px-4 border">{{ $client->nom }}</td>
                            <td class="py-2 px-4 border">{{ $client->email }}</td>
                            <td class="py-2 px-4 border">{{ $client->created_at->format('d/m/Y') }}</td>
                            <td class="py-2 px-4 border">
                                <!-- Formulaire de suppression -->
                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200"  style="background-color: blue">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
