@component('mail::message')
# Bienvenue

Merci {{ $data->name }} de vous etre inscrit sur note app avec l'email {{ $data->email }}.

@component('mail::button', ['url' => ''])
Send me 
@endcomponent

cdlt,<br>
{{ config('app.name') }}
@endcomponent
