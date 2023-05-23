@component('mail::message')
Bonjour

Vous avez un nouveau message de: <strong>{{ $details['nom'] }}</strong> <br>
{{-- Ci-dessous les informations de l'utilisateur: <br><br> --}}
<strong>Nom et Prenom:</strong> {{ $details['nom'].' '.$details['prenom'] }} <br>
<strong>Email:</strong> {{ $details['email'] }} <br>
@if(!empty($details['tele']))
<strong>Télephone:</strong> {{ $details['tele'] }} <br>
@endif
<strong>Adresse:</strong> {{ $details['adresse'] }} <br>
{{-- <strong>Objet:</strong> {{ $details['subject'] }}</strong> <br> --}}
<strong>Message:</strong> {{ $details['message'] }}<br><br>

Cordialement,<br>
L'équipe<span> </span>Jaim.
@endcomponent
