@extends('dashboard.layouts.master')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh; padding-top: 100px;">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="text-center mb-4">
                    @if($typepret->exists)
                        Modifier le type de prêt
                    @else
                        Créer un nouveau type de prêt
                    @endif
                </h4>
                <form class="row g-3 needs-validation" method="POST" action="{{ $typepret->exists ? route('typeprets.update', $typepret->id) : route('typeprets.store') }}" novalidate>
                    @csrf
                    @if($typepret->exists)
                        @method('PUT')
                    @endif

                    <!-- Nom du type de prêt -->
                    <div class="col-md-12">
                        <label for="nompret" class="form-label">Nom du Prêt</label>
                        <input type="text" name="nompret" class="form-control" id="nompret" value="{{ old('nompret', $typepret->nompret) }}" required>
                        <div class="invalid-feedback">
                            Veuillez entrer le nom du prêt.
                        </div>
                    </div>

                    <!-- Description du type de prêt -->
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" required>{{ old('description', $typepret->description) }}</textarea>
                        <div class="invalid-feedback">
                            Veuillez entrer une description.
                        </div>
                    </div>

                    <!-- Bouton d'envoi -->
                    <div class="col-12 mt-4 text-center">
                        <button class="btn btn-primary" type="submit">
                            @if($typepret->exists)
                                Modifier
                            @else
                                Créer
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
