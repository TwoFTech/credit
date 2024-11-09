@extends('dashboard.layouts.master')

@section('content')
<div class="container mt-4"  style="min-height: 80vh; padding-top: 100px;">
    <h1 class="text-center">Liste des Types de Prêt</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom du Prêt</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($typeprets as $typepret)
            <tr>
                <td>{{ $typepret->id }}</td>
                <td>{{ $typepret->nompret }}</td>
                <td>{{ $typepret->description }}</td>
                <td>
                    <a href="{{ route('typeprets.edit', $typepret->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('typeprets.destroy', $typepret->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('typeprets.create') }}" class="btn btn-primary">Ajouter un nouveau type de prêt</a>
</div>
@endsection
