
# AV-Plugin
In questa sezione verranno aggiunti i plugins creati da noi per altervista bot.

## Guida :
### Sommario :
> [Come faccio ad usare AV-BOT?](#come-uso-av-bot-)

> [Come aggiungo un plugin?](#come-si-aggiunge-un-plugin)

> [Come faccio a vedere se va il plugin senza inviare il messaggio?](#come-faccio-a-vedere-se-il-plugin-funziona-senzaa-inviare-il-messaggio-al-bot)

> [FUNZIONAMENTO TEORICO DEI BOT](#funzionamento-teorico-dei-bot)

###  Come faccio ad usare AV-BOT? 
##
_Requisiti_

>1. Usare @httpsfreebot soltanto per settare correttamente il vostro Bot.

>2. Fornire il numero di telefono ad Altervista, unicamente per sicurezza, non riceverete mai nessun messaggio o chiamata.

>3. Avere una minima mentalità da programmatore.



*RIMO PASSO*

Vai su http://it.altervista.org/registrazione.php?action=form e crea un sito seguendo i passaggi.

⚠️ Attenzione: devi creare un sito con accesso FTP non un Blog!

ℹ️ Nota: Il nome del sito è indifferente

ATTIVAZIONE VARI SERVIZI
Una volta creato il sito, sarà necessario attivare vari servizi, che richiederanno un po' di attesa.
Andare nel pannello e attivare queste opzioni:
🔸  RISORSE ➡️ ATTIVA CLOUDFLARE
🔹  RISORSE ➡️ ATTIVA HTTPS
🔸  RISORSE ➡️ ATTIVA DATABASE

Facoltativo, ma consigliato:
🔸 GESTIONE FILE ➡️ PHP5 ➡️ CONNESSIONI SERVER TO SERVER

⚠️ IMPORTANTE Finchè tutti i servizi necessari non sono attivi, non proseguire nella lettura della guida.⚠️

## Come si aggiunge un plugin?

❗️Il plugin va incorporato nel Bot come tutti gli altri plugin, ossia in questo modo:

➖ Andate nel file _config.php

➖ Alla fine del file, troverete:

```//plugins
$plugins = array(
//tutti i vostri plugin
);
```
➖Dove ho scritto il commento "tutti i vostri plugin", alla riga sotto aggiungete:

```"nomepl.php" => true,```

✅ Ecco fatto!

## Come faccio a vedere se il plugin funziona senzaa inviare il messaggio al bot?
é semplice andate su https://linkav.altrevista.org/nomebot/index.php
e dovrebbe dire "NomePlugn > Attivo"
in caso contrario se non vedi il mess del plugin attivo  Segnalatecelo su telegram [Gruppo](https://t.me/ryzonproject) - [Canale](https://t.me/ryzonproject_channel) - [Bot](https://t.me/ryzonproject_bot).

## FUNZIONAMENTO TEORICO DEI BOT

È semplice:
🔸 Ogni volta che un utente invia un messaggio ad un bot, Telegram invia tale messaggio (insieme ad altre info dell'utente e della chat) al server impostato nel webhook, ossia il vostro creato con altervista.
🔹 La vostra pagina in php analizzerà il messaggio ricevuto e in base a quello invierà direttamente un messaggio tramite il bot all'utente o al gruppo da cui è stato richiesto.

ℹ️ Nota: Il messaggio che Telegram ci invia è in formato standard json in modo che tutti i linguaggi lo riescano a leggere.


[![Version](https://img.shields.io/badge/Versione-1.0-blue.svg)]()  [![Dona](https://img.shields.io/badge/Dona-1$-brightgreen.svg)](https://p.me/ryzonproject)    
