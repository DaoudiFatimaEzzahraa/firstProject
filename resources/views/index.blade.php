@extends('layouts.app')

@section('title', 'Mes tâches')

@section('main')
    <h1>Mes tâches</h1>
<p class="intro">Retrouvez vos priorités, suivez leur avancement et gardez une vue claire sur votre journée.</p><section class="toolbar" aria-label="Filtres des tâches">
    <label for="search">Rechercher une tâche</label>
    <input id="search" type="search" placeholder="Rechercher par titre">
    <div class="filters" aria-label="État de la tâche">
        <button type="button" data-filter="all" aria-pressed="true">Toutes</button>
        <button type="button" data-filter="pending" aria-pressed="false">À faire</button>
        <button type="button" data-filter="done" aria-pressed="false">Terminées</button>
    </div>
</section>
<p id="result-count" role="status" aria-live="polite"></p><div id="task-list"><article class="task" data-title="Finaliser la proposition commerciale" data-status="pending">
    <div><h2>Finaliser la proposition commerciale</h2><p>Confirmer les prestations et transmettre le document au client.</p></div>
    <span class="badge">À faire</span>
</article>
<article class="task" data-title="Mettre à jour le catalogue" data-status="done">
    <div><h2>Mettre à jour le catalogue</h2><p>Vérifier les références et actualiser les disponibilités.</p></div>
    <span class="badge done">Terminée</span>
</article>
<article class="task" data-title="Préparer le rendez-vous client" data-status="pending">
    <div><h2>Préparer le rendez-vous client</h2><p>Rassembler les documents et préparer les points à aborder.</p></div>
    <span class="badge">À faire</span>
</article></div><p id="empty-message" hidden>Aucune tâche ne correspond à la recherche.</p>
@endsection