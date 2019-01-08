Homo Socialis
=============

"Homo Socialis" ist ein Netzwerk von Menschen zur gegenseitigen finanziellen Hilfe in schwierigen Lebenssituationen. Es ist ein soziales Absicherungsnetz für Notlagen auf der Basis gemeinsamer Entscheidungen sowie monatlicher Beiträge, realisiert als dezentrale autonome Organisation.

#### Inhaltsverzeichnis

  * [Wie es funktioniert]
  * [Konzept]
  * [Implementierung]
  * [Kontakt]

# Wie es funktioniert

Stell dir vor, es war einmal ... eine Gruppe von Menschen. Diese haben sich regelmäßig getroffen und alle haben immer etwas Geld in einen gemeinsamen Spartopf getan. Wenn einer von ihnen mal in eine Notlage kam, haben sie sich getroffen und entschieden, ihm mit Geld aus dem Topf zu helfen.

Dank Smart Contracts, Decentralized Autonomous Organizations und dem Internet kann dies heute eine fast beliebig große Gruppe von Menschen gemeinsam umsetzen - ohne dass alle Mitglieder einander kennen müssen - ohne der Erfordernis von gemeinsamen persönlichen Treffen für Entscheidungen - und all dies ohne einer zentralen Leitung.

Wir arbeiten an einem solchen Versuchsprojekt unter wissenschaftlicher Begleitung.


# Konzept

Die folgende Ausführung soll nur die prinzipielle Funktionsweise und den Ablauf verdeutlichen. Es handelt sich hierbei nicht um einen detaillierten und vollständig ausgearbeiteten Plan. Siehe im Roadmap für weitere Informationen.

#### Beitrag

  * Das Netzwerk besitzt einen finanziellen Topf. Dieser wird durch Einlagen der Mitglieder bei ihrer Aufnahme gebildet.
  * Jedes Mitglied ist anteilig Eigentümer dieses Topfes. Bei Beendigung der Mitgliedschaft wird der anteilige Wert an das Mitglied ausbezahlt.
  * Jedes Mitglied leistet einen monatlichen Beitrag.
  * Das Netzwerk strebt eine konkrete Höhe des finanziellen Topfes an. Die Höhe entspricht der in den letzten x Jahren von ihren Mitgliedern bewilligten und ausbezahlten Notfall-Leistungen. Neue Notfall-Leistungen und veränderte Mitgliederzahl werden kontinuierlich berücksichtigt - dies ergibt die sich laufend anpassende Topf-Soll-Größe.
  * Notfall-Leistungen werden aus dem gemeinsamen Topf bezahlt.
  * Die genaue Höhe des Monatsbeitrags wird jeden Monat neu berechnet. Sie entspricht:
    1. der Höhe der in den letzten x Jahren durchschnittlich eingetretenen Notfall-Leistungen pro Kopf im Monat,
    2. plus ggf. jener Summe die notwendig ist um den Topf innerhalb der kommenden y Jahre auf die Soll-Größe zu bringen.
    - (Die Beiträge und der Topf müssen sich den laufenden Notfällen, der Mitgliederzahl und den Gepflogenheiten des Netzwerks anpassen.)
  * Aktuell bewilligte Notfälle haben damit einen direkten (unbedeutend minimalen bis spürbaren) Einfluss auf:
    1. die Größe des Topfes und damit auf den Wert des eigenen Topf-Anteils,
    2. die Beitragshöhe ab dem Folgemonat.
    *  (Beispiel: In einem Netzwerk von 100 Mitgliedern bewirkt ein einmaliger Hilfsfall von z.B. $1,000 (od. $10,000) ein Sinken des Anteil-Werts um $10 (bzw. $100), sowie eine Beitragserhöhung um $0.83 (bzw. $8.33) minus jener Fälle die nun aus dem z.B. 3-Jahres-Rahmen fallen. Ein Hilfsfall von dauerhaft $1,000/Monat pendelt sich bei einem zusätzlichem Beitrag von $10/Monat ein.)

#### Hilfeleistung

  * Gerät ein Mitglied in Not, kann dieses eine Beschreibung seiner Lage zusammen mit einer konkreten Bitte an das Netzwerk senden und veröffentlichen (nur innerhalb des Netzwerks mit seinem Mitgliedernamen).
  * Diese Hilfsbitte wird an eine zufällig ausgewählte Jury aus x Mitgliedern gesendet[^1], welche mit Mehrheitsbeschluss darüber abstimmen muss. Die Abstimmung erfolgt online ohne Absprache, jeder gibt seine Stimme unabhängig von den anderen ab. Jeder wird prüfen, ob die Bitte und Art des Notfalls den Grundregeln des Netzwerks seiner Meinung nach genügt, sowie versuchen abzuschätzen ob die Höhe der Bitte angemessen ist. Ein Bewilligen wird i.d.R. auch einen minimalen bis spürbaren Einfluss auf den Anteils-Wert des Topfes sowie auf den monatlichen Beitrag haben. Beides wird den Abstimmenden angezeigt und sie werden auch dies in ihrer Entscheidung berücksichtigen und die Konsequenzen mit der Schwere des Notfalls abwägen. Jeder entscheidet in reinem Eigeninteresse und wird daran denken dass auch er einmal auf der anderen Seite mit einem Notfall landen kann - dies ist der Grund seiner Teilnahme am Netzwerk.
  * Das Ergebnis der Abstimmung wird öffentlich, die abstimmenden Teilnehmer sowie ihre Stimmabgabe werden aber nur in einer verschlossenen Box[^2] gespeichert. D.h. die Abstimmer können ihre Stimme anonym abgeben. Dies soll verhindern dass Nein-Abstimmer im Netzwerk gebrandmarkt werden können und sie eine negative Auswirkung befürchten müssten falls sie selbst einmal in eine Notlage geraten. Sollte das Ergebnis der Abstimmung von einer Mindestzahl an Mitgliedern im Netzwerk bezweifelt werden, lässt sich die Abstimmung durch öffnen der verschlossenen Box überprüfen.
  * Es gibt keinen Rechtsanspruch auf Leistungen. Jedes Mitglied muss anhand des Verhaltens im Netzwerk, der Beitragshöhe und der finanziellen Situation des Netzwerks selbst entscheiden ob eine Teilnahme für ihn attraktiv ist.

#### Kontrollmechanismen

  * Alle Hilfe-Leistungen der gesamten Vergangenheit sind für alle sichtbar. Vielfach wiederholte Bitten werden auffallen. Bei einer Hilfe-Anfrage werden sich die Teilnehmer der Jury die Vergangenheit des Betroffenen ansehen.
  * Eine Hilfe-Anfrage wird man je nach Art des Notfalls durch Belege, Kostenvoranschlag, Bericht von Krankenhaus, Polizei, Zeugen, etc. bekräftigen. Eventuell wird man jemanden aus dem Netzwerk angeben können, der einen persönlich kennt und der die Lage bezeugt.
  * Nachgewiesener Missbrauch oder Betrug wird rechtlich verfolgt und der Betroffene haftet u.a. mit seinem Topf-Anteil.
  * Vielleicht gehen x‰ der monatlichen Beiträge in einen Privatdetektiv-Topf. Zeigen bei einer Hilfe-Abstimmung x der Abstimmer ein Misstrauen, dann wird ein externer Dienstleister im Auftrag des Netzwerks herangezogen um den Fall zu prüfen. (Eventuell wird bei allen Hilfs-Fällen von Zeit zu Zeit stichprobenartig geprüft.)  
    Alleine der Umstand dass diese Kontrollmaßnahme vorgesehen und allen bekannt ist, wird Missbrauch einschränken.
  * Jeden Missbrauch wird man nicht verhindern können.

#### Grundregeln

  * Das Netzwerk gibt ein paar wenige, aber möglichst eindeutig und klar verständliche Grundsätze vor, an welchen sich die Mitglieder bei Hilfe-Anfragen und Abstimmungen orientieren können.
  * Das Netzwerk kann diese Grundsätze bei veränderten Bedürfnissen mittels Vorschlag und Abstimmung anpassen.
  * Die Grundsätze gelten nur als Orientierungshilfe. Bei Abstimmung von Hilfs-Anfragen zählt ausschließlich die persönliche Entscheidung aufgrund des konkreten Hilfsfalls und dessen Umständen.

#### Mitgliedschaft

  * Möchte jemand dem Netzwerk beitreten, so braucht diese Person eine Empfehlung von mindestens einem konkreten Mitglied. Von wem diese Empfehlung stammte, wird für alle sichtbar.  
    Möchte jemand beitreten, kennt aber niemanden, besteht die Möglichkeit sich online vorzustellen und den Wunsch zu äußern ein Mitglied in der Nähe kennenzulernen.  
    Vielleicht gibt es ein Mal pro Monat oder Quartal ein Treffen von einem Teil des örtlichen Netzwerks um sich untereinander auch persönlich näher kennenlernen zu können und bei welchem sich auch Aufnahme-Interessierte vorstellen und bewerben können.
  * Kommt es zu einer Empfehlung einer Neuaufnahme, erhält ein anderes zufällig ausgewähltes Mitglied aus der Nähe den Auftrag[^1] sich mit dem Interessenten persönlich zu treffen und dabei seine Identität zu prüfen, d.h. einen Ausweis zu sehen und ein Foto davon in einer verschlossenen Box[^2] zu speichern. Nur der frei gewählte Mitgliedsname, welches Mitglied die Identität geprüft hat und ein Hash-Wert seiner Daten sind öffentlich sichtbar. Die damit verknüpfte Ausweiskopie und die personenbezogenen Daten sind in einer verschlossenen Box und können nur dann gelesen werden sobald eine Mindestzahl an Mitgliedern dies fordert. (Der Hash-Wert der personenbezogenen Daten gibt keinerlei Auskunft, ermöglicht aber dass Mitglieder erkannt werden falls sie versuchen sich mehrmals anzumelden oder nachdem sie bereits einmal ausgeschlossen wurden.)
  * Das neue Mitglied muss den aktuellen Monatsbeitrag leisten.
  * Das neue Mitglied muss außerdem eine Kapitaleinlage leisten welche in den Topf kommt. Das Mitglied erwirbt damit einen Eigentums-Anteil am gemeinsamen Topf und erhält bei Austritt oder Ausschluss diesen Anteil wieder ausbezahlt.  
    Die Höhe der Einlage entspricht genau dem aktuellen Nettoinventarwert des Topfes pro Mitglied (d.h. rechnerisch i.d.R. maximal "aktueller Monatsbeitrag x 12 Monate x Anzahl Jahre des Topf-Puffers", also z.B. bei monatlichem Beitrag von $125-$250 und 3 Jahren als Topf-Puffer sind dies 4.500-9.000 $). Für wen dies nicht möglich ist, der kann stattdessen einen 50%-igen Aufschlag zum monatlichen Beitrag zahlen, um so kontinuierlich seinen Eigentums-Anteil am Topf aufzubauen (bei 50%-Aufschlag und 3-Jahres-Topf-Puffer ca. 6 Jahre lang).
  * Die Mitgliedschaft endet sobald sich ein Mitglied dafür entscheidet, oder es seinen Beitrag nicht zahlt, oder mindestens x Mitglieder einen Ausschluss fordern und dies von einer Jury aus y zufällig gewählten Mitgliedern bestätigt wird.
  * Der Anteil am Topf wird bei Beendigung der Mitgliedschaft wieder ausbezahlt - d.h. der anteilige Wert (Nettoinventarwert), nicht der Nominalbetrag seiner Einlagen.

Obige Ausführungen sollen nur die prinzipielle Funktionsweise erläutern. Genaue Regeln, technische Implementierung, etc. waren an dieser Stelle nicht das Ziel.


# Implementierung

Die technische Implementierung erfolgt z.B. mittels Nutzung von Bitcoin als Zahlungsmittel und Bitcoin Smart Contracts über Rootstock (RSK) mit einer eigenen parallelen DAO u. Blockchain implementiert in Scala mit Scorex als Framework. Momentan prüfen wir auch die Nutzung von Bitnation/Pangea. Für Programmier-Entusiasten gibt es momentan ein großes Feld an Möglichkeiten und auch Glaubensrichtungen.

Schon in 6 Monaten wird sich die Blockchain-Landschaft wieder stark weiterentwickelt und auch verändert haben. Weiters rechnen wir mit einem Projektstart mit den ersten Teilnehmern erst in 1-2 Jahren und ab dann mit einer 1-2 jährigen Experimentierphase mit vermutlich einigen Anpassungen aufgrund der gesammelten Erfahrungen.

Aus diesem Grund arbeiten wir für die Experimentierphase an einem weitgehend noch zentralisiert laufenden Prototypen.

Unser Fokus liegt beim Netzwerk welches aus Menschen besteht, den Dynamiken die sich darin entwickeln und in welcher Form und unter welchen Regeln das Ziel einer gemeinsamen Absicherung für Notfälle am sinnvollsten zu erreichen ist.

Jede von uns entwickelte Software wird als Open Source freigegeben.


# Kontakt

Momentan arbeiten wir an den Vorbereitungen für das erste Versuchsprojekt. Es handelt sich um freiwillige Teilnehmer einer bestimmten Region. Um die Interessen und die Privatsphäre dieser zu schützen, werden wir vor Beginn der ersten Phase noch keinerlei Auskünfte geben.

Falls Sie aus dem wissenschaftlichen Bereich (Soziologie, Ökonomie) kommen und Interesse an einer Begleitung, Forschung, Auswertung haben, dann sind Sie herzlich willkommen an diesem Experiment mitzuwirken. Schreiben Sie uns in diesem Fall bitte ab 2020.

Unser Fokus liegt in der ersten Phase bei der Absicherung von Notfällen und nicht bei einer allgemeinen Art von selbstverwaltetem dezentralen Sozialsystem für Gesundheit, Bildung, Alter, etc. Unsere Texte, Homepage, kommende Softwareteile sind quelloffen und wir freuen uns über jeden der an ähnlichen Projekten arbeitet. Für einen Erfahrungsaustausch werden wir dann eine Plattform bereitstellen.

$~$
  
©[HomoSocialis.net](https://homosocialis.net) – Version 2018-12-28

[^1]: "x Mitglieder müssen tun": Dies heißt, dass x Mitglieder per Zufall aus allen ausgewählt werden und diese die Aufforderung bekommen etwas zu tun. Machen sie dies, erhalten sie positive Punkte, ansonsten negative Punkte. Diese Punkte sind für alle sichtbar und Mitglieder mit zu vielen negativen Punkten werden optisch hervorgehoben. Diese Punkte dienen nur als Signal und nicht als irgend eine Form von Währung. Es wird auch weder eine eigene (Krypto-)Währung noch ein ICO angestrebt.
[^2]: "diese Daten kommen in eine verschlossene Box": Dies bedeutet, dass diese Daten von keiner einzelnen Person einsehbar sind, aber von allen Mitgliedern sobald eine bestimmte Zahl an Mitgliedern dies fordert (technisch z.B. umsetzbar mittels asymmetrischer Verschlüsselung in Kombination mit Shamir’s Secret Sharing).

