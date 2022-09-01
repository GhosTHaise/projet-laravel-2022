@component('mail::message')
# Introduction

<h4>Bonjour , {{$mail_info->Nom}}</h4>
<p>Nous avons bien reçu votre demande concernant le conge de {{\Carbon\Carbon::parse($mail_info->Depart)->format("Y-m-d")}} au {{\Carbon\Carbon::parse($mail_info->Arrive)->format("Y-m-d")}}  et nous vous en remercions. 
    <br>{{!($mail_info->status = "valide") ? "Cependant, malgré l'intérêt que suscite , nous sommes au regret de ne pas pouvoir répondre favorablement à votre demande."
    : "Nous avons le plaisir de vous donner notre accord pour ce congé sans solde."
}}
</p>



Cordialement,<br>
{{ config('app.name') }}
@component('mail::button', ['url' => ''])
Confimer
@endcomponent
@endcomponent
