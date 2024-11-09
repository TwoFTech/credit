@extends('dashboard/layouts/master')

@section('content')
    {{-- <div class="container">
        <h1>Mon Profil</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">Nouveau mot de passe (laisser vide si inchangé)</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" class="form-control">
            </div>
{{--
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar" class="form-control-file">
                @if($admin->avatar)
                    <img src="{{ asset('images/avatars/' . $admin->avatar) }}" alt="Avatar" class="img-thumbnail mt-2" style="width: 150px;">
                @endif
            </div> --}}

            {{-- <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
        </form>
    </div>  --}}
@endsection
