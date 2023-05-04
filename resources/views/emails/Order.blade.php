@component('mail::message')
Bonjour,

Vous avez une nouvelle commande de la part de : <strong>{{ $details['nom'] }}</strong> <br>
Vous trouverez ci-dessous les détails du message: <br>
<strong>Nom et Prénom:</strong> {{ $details['nom'].' '.$details['prenom'] }} <br>
<strong>Adresse e-mail:</strong> {{ $details['email'] }} <br>
@if(!empty($details['tele']))
<strong>Télephone:</strong> {{ $details['tele'] }} <br>
@endif
<strong>Adresse de livraison:</strong> {{ $details['adresse'] }} <br>
<strong>Message:</strong> {{ $details['message'] }}<br><br>

@if (!empty($details['produits_id']))
<strong>Voici les produits demandés :</strong>
<ul>
@foreach(json_decode($details['produits_id']) as $produit_id)
<li>{{ $produit_id }}</li>
@endforeach
</ul>
@endif

<p>Cordialement,<br>
L'équipe Jaim.</p>
@endcomponent
