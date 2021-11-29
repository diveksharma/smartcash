@component('mail::message')
# {{ $maildata['title'] }}

**Namn:** {{ $maildata['name'] }}<br><br>
**Telefon:**  {{ $maildata['phone'] }}<br><br>
**Email:** {{ $maildata['email'] }}<br><br>
**Företag:** {{ $maildata['company'] }}<br><br>
**Organisationnummer:** {{ $maildata['organization'] }}<br><br>
**Typ av bransch:** {{ $maildata['branch'] }}<br><br>
**Adress:** {{ $maildata['adress'] }}<br><br>
**personnummer:** {{ $maildata['social-security-number'] }}<br><br>
**Kontonummer:** {{ $maildata['account-number'] }}<br><br>

@endcomponent
