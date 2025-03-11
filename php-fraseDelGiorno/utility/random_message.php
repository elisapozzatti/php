<?php
    function getRandomMessage(){
        $messages = ["Non possiamo risolvere i problemi con il tipo di pensiero che abbiamo impiegato quando li abbiamo concepiti.", "Impara come se dovessi vivere per sempre, vivi come se dovessi morire domani.", "Stai lontano da quelle persone che cercano di sminuire le tue ambizioni. Le menti piccole lo faranno sempre, ma le grandi menti ti daranno la sensazione che anche tu puoi diventare grande.", "Quando dai gioia ad altre persone, ricevi più gioia in cambio. Dovresti pensare bene alla felicità che puoi dare.", "Quando cambi i tuoi pensieri, ricorda di cambiare anche il tuo mondo.", "È solo quando ci prendiamo dei rischi che le nostre vite migliorano. Il rischio iniziale e più difficile che dobbiamo correre è diventare onesti.", "La natura ci ha dato tutti i pezzi necessari per raggiungere un benessere e una salute eccezionali, ma ha lasciato a noi il compito di metterli insieme."];
        $randomQuote = array_rand($messages);
        return $messages[$randomQuote];
    }
?>