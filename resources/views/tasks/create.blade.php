<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <label>Titre :</label>
    <input type="text" name="title">

    <label>Commentaire :</label>
    <textarea name="commentaire"></textarea>

    <label>
        <input type="checkbox" name="is_completed" value="1">
        Terminée
    </label>

    <button type="submit">Ajouter</button>
</form>