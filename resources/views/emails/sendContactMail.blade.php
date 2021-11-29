@component('mail::message')
# {{ $maildata['title'] }}

**Namn:** {{ $maildata['name'] }} {{ $maildata['lastname'] }}<br>
**Telefon:**  {{ $maildata['phone'] }}<br>
**Email:** {{ $maildata['email'] }}<br>

# Meddelande
{{ $maildata['message'] }}<br>
@endcomponent