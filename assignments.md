# Assignments

Gegeven is de huidige uitwerking op github.

We hebben de volgende resourses en hun methods geimplementeerd.
- terms: index
- courses: index, create

## 1. Breidt de courses resource

Implementeer een edit en delete method voor de resource Course. De edit is daarbij de goede uitdaging omdat het wat lastiger is om de ingevoerde data en term op de juiste manier naar een value in het input van het formulier te krijgen.

## 2. Implementeer basis authenticatie

Laravel maakt  basis authenticatie mogelijk doormiddel van het `php artisan make:auth` commando. Voordat je dit uitvoert is het ook slim om de documentatie en de juiste video's op laracasts te bekijken.

- [Auth documentatie op laravel](https://laravel.com/docs/5.8/authentication#other-authentication-methods)
- [Simple registratie op laracasts](https://laracasts.com/series/laravel-from-scratch-2018/episodes/24)
- [Authenticatie op laracasts](https://laracasts.com/series/laravel-from-scratch-2018/episodes/26)

Daarbij is het ook nog een uitdaginkje om de gegenereerde blade formulieren in je eigen design te verwerken.

## 3. Implementeer basis authorisatie

Nu een gebruiker zich kan registreren kun je gaan onderzoeken wat een bezoekende gebruiker en een geregistereerde gebruiker op de website kan. Voorstel is het volgende.

Bezoekende gebruiker
- Terms: index
- Courses: index

Geregisteerde gebruiker
- (niet van toepassing) Terms: create, edit, delete
- Courses: create, edit, delete

## 4. Implementeer gevorderde authorisatie

Nu je de basis van authorisatie hebt geimplementeerd is het slim om eens te bekijken wat je zelf echt zou willen. Vragen die je kan stellen zijn:
1. Wil ik echt dat iedere gebruiker zich kan registeren
2. Is er verschil in bepaalde rollen van een geristereerde gebruiken. Bijvoorbeeld een admin rol mag meer dan een create/edit rol.
3. Kan bijvoorbeeld een gebruiker 'Gerard' ook de courses waar 'Gert' voor verantwoordelijk is updaten?

Dit wordt aardig uitgelegd in [Authorization Essentials](https://laracasts.com/series/laravel-from-scratch-2018/episodes/27).

Wanneer je dit hebt onderzocht kun je dit natuurlijkz zelf gaan bouwen. Je kan echter ook gebruik maken van een bestaande package. Een goede voorbeeld is deze [package](https://github.com/spatie/laravel-permission)