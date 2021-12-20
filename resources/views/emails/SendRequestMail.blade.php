@component('mail::message')
# {{ $maildata['title'] }}

**Namn/Företag:** {{ $maildata['name'] }}<br>
**Email:** {{ $maildata['email'] }}<br>
**Telefon:**  {{ $maildata['phone'] }}<br><br>

**Intresserad av:**  {{ $maildata['type'] }}<br>

@if ($maildata['cart'])
@component('mail::table')
| Produkter       | Pris         |
|:-------------|--------:|
@foreach($maildata['cart'] as $type => $result)
| {{ $result['name'] ?? 'PRODUCT' }}      | {{ $result['price_currency'][0]['price'] ?? 'PRODUCT_PRICE' }} kr      |
@endforeach
@endcomponent
@endif
@endcomponent
