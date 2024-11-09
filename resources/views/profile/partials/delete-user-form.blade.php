<div class="section">
    <h3>Supprimer le compte</h3>
    <form action="{{ route('profile.destroy') }}" method="POST">
        @csrf
        @method('delete')

        <p>Une fois votre compte supprimé, toutes vos données seront définitivement effacées.</p>

        <label for="password_delete">Mot de passe</label>
        <input type="password" id="password_delete" name="password" placeholder="Confirmez votre mot de passe" required>

        <div class="flex justify-end">
            <button type="button" class="btn">Annuler</button>
            <button type="submit" class="btn btn-danger" style="margin-left: 15px;">Supprimer</button>
        </div>
    </form>
</div>
