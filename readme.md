# Robme web! [SK] 🇸🇰
Projekt orientovaný najmä na [`.php`][LINK] web vývoj a jeho doplnky.

## Spustenie Php (aj HTML) stránok lokálne
Pomocou týchto príkazov (v príkazovom riadku alebo inom itegrovanom prostredí):

1. ```shell
   $ php -S localhost:'$XXXX'
   ```

    *`XXXX` poukazuje na kód tzv. `localhost-u`.
O konfigurovaní __localhost-u__ si môžete prečítať viac [tu][LINK2].

2. V príkazovom riadku vidíme tzv. `Document root`, ktorý poukazuje na [scope][LINK3],
resp. miesto, odkiaľ vieme načítať kód a slúži ako "najvyšší" súbor štruktúrovanej hierarchie súborov.
<br><br>![command-line1][Photo1]

3. A teraz sa pozrime do nášho prehliadača! <br>
Prepíšme náš zvolený `localhost` do vyhľadávecej lišty.

    `localhost:4000` možno chápať ako náhradu za náš `Document root` z ktorého môžeme spúšťať `.php` dokumenty. <br><br>![browser][Photo2]<br>
   
    *V mojom prípade som použil _4000_ pre konfiguráciu __localhostu-u__ (toto číslo sa môžeme odlišovať podľa vaše konfigurácie).

    *Ako skušobný `.php` súbor som použil `site.php`. Súbor može mať ľubovoľné meno (pred __.php__ koncovkou).
    Napr: `jozko.php`. <br><br>

    __Pripomienky:__ 
    1. Php dokáže automaticky prepojiť všetky doplnky daného `.php` súboru.
    Napr. __Headers__, __JavaScript funkcie__ alebo __CSS__ stránky.
    Ako indexovať stránku a význam `index.php` [článok][LINK4].
    2. Doteraz aplikované kroky možno využiť aj na `.html` súbory alebo iné prvky spojené s __Web vývojom__. <br><br>

4. Konfigurácie prebehla úspešne, veľa šťastia na ceste __Web Development-u__! :blush:

<!-- LINKS -->
[LINK]: https://www.php.net
[LINK2]: https://www.hostinger.com/tutorials/what-is-localhost
[LINK3]: https://www.lifewire.com/what-is-a-root-folder-or-root-directory-2625989
[LINK4]: https://docs.joomla.org/What_is_the_purpose_of_the_index.php_file%3F

<!-- Photos -->
[Photo1]: docs/command-line1.png
[Photo2]: docs/command-line2.png

