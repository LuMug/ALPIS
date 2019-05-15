1. [Introduzione](#introduzione)

  - [Informazioni sul progetto](#informazioni-sul-progetto)

  - [Abstract](#abstract)

  - [Scopo](#scopo)


2. [Analisi](#analisi)

  - [Analisi del dominio](#analisi-del-dominio)

  - [Analisi dei mezzi](#analisi-dei-mezzi)

  - [Analisi e specifica dei requisiti](#analisi-e-specifica-dei-requisiti)

  - [Use case](#use-case)

  - [Pianificazione](#pianificazione)


3. [Progettazione](#progettazione)

  - [Design dell’architettura del sistema](#design-dell’architettura-del-sistema)

  - [Design dei dati e database](#design-dei-dati-e-database)


4. [Implementazione](#implementazione)


5. [Test](#test)

  - [Protocollo di test](#protocollo-di-test)

  - [Risultati test](#risultati-test)

  - [Mancanze/limitazioni conosciute](#mancanze/limitazioni-conosciute)


6. [Consuntivo](#consuntivo)


7. [Conclusioni](#conclusioni)

  - [Sviluppi futuri](#sviluppi-futuri)

  - [Considerazioni personali](#considerazioni-personali)


8. [Sitografia](#sitografia)


9. [Allegati](#allegati)

<br>

## Introduzione

<br>

### Informazioni sul progetto

  - <b>Titolo Progetto: </b>Sito per la consultazione di progetti passati

  - <b>Docente responsabile: </b>Luca Muggiasca

  - <b>Allievi responsabili: </b>Peter Catania, Nemanja Stojanovic

  - <b>Luogo di lavoro: </b>Scuola d’Arti e Mestieri Trevano, Aula 428

  - <b>Classe: </b>Peter Catania I3AC, Nemanja Stojanovic I3AA

  - <b>Materia: </b>Modulo 306

  - <b>Data di inizio: </b>2019.02.13

  - <b>Data di fine: </b>2019.05.17

<br>

### Abstract

  E’ una breve e accurata rappresentazione dei contenuti di un documento,
  senza notazioni critiche o valutazioni. Lo scopo di un abstract efficace
  dovrebbe essere quello di far conoscere all’utente il contenuto di base
  di un documento e metterlo nella condizione di decidere se risponde ai
  suoi interessi e se è opportuno il ricorso al documento originale.

  Può contenere alcuni o tutti gli elementi seguenti:

  -   **Background/Situazione iniziale**

  -   **Descrizione del problema e motivazione**: Che problema ho cercato
      di risolvere? Questa sezione dovrebbe includere l'importanza del
      vostro lavoro, la difficoltà dell'area e l'effetto che potrebbe
      avere se portato a termine con successo.

  -   **Approccio/Metodi**: Come ho ottenuto dei progressi? Come ho
      risolto il problema (tecniche…)? Quale è stata l’entità del mio
      lavoro? Che fattori importanti controllo, ignoro o misuro?

  -   **Risultati**: Quale è la risposta? Quali sono i risultati? Quanto è
      più veloce, più sicuro, più economico o in qualche altro aspetto
      migliore di altri prodotti/soluzioni?

  Esempio di abstract:

  > *As the size and complexity of today’s most modern computer chips
  > increase, new techniques must be developed to effectively design and
  > create Very Large Scale Integration chips quickly. For this project, a
  > new type of hardware compiler is created. This hardware compiler will
  > read a C++ program, and physically design a suitable microprocessor
  > intended for running that specific program. With this new and powerful
  > compiler, it is possible to design anything from a small adder, to a
  > microprocessor with millions of transistors. Designing new computer
  > chips, such as the Pentium 4, can require dozens of engineers and
  > months of time. With the help of this compiler, a single person could
  > design such a large-scale microprocessor in just weeks.*

<br>

### Scopo

  Migliorare il sito web già esistente, che permette di aggiungere e consultare i progetti creati nei vari anni scolastici

<br>

## Analisi

<br>

### Analisi del dominio

    Il progetto consiste in un sito Web esistente che bisogna modificare e aggiungere le funzionalità richieste. Questo sito verrà utilizzato dai docenti e dagli allievi della scuola professionale di Trevano per gestire i progetti fatti durante il percorso scolastico.  


<br>

### Analisi e specifica dei requisiti

---

#### REQ-01

  |ID  |REQ-01                                        |
  |----|----------------------------------------------|
  |**Nome**    |Aggiungere funzionalità|
  |**Priorità**|1                     |
  |**Versione**|1.0                   |
  |**Note**    |Aggiungere funzionalità al sito web gia creato precedentemente, per la consultazione di progetti passati |
  |            |**Sotto requisiti** |
  |**001**      | Si sviluppano le funzionalità sul sito già esistente|
  |**002**      | Il sito permette di consultare i documenti elettronici dei progetti|
  |**003**      | Grazie ai campi si dovranno visualizzare i progetti in base alla ricerca.  |

---

#### REQ-02

  |ID  |REQ-02                                        |
  |----|----------------------------------------------|
  |**Nome**    |Possibilità di associare un link di un repository all'aggiunta di un progetto|
  |**Priorità**|1                     |
  |**Versione**|1.0                   |
  |**Note**    |Quando si aggiunge un progetto, deve esistere la possibilità di aggiungere anche il link ad una possibile repository su git.|
  |            |**Sotto requisiti** |
  |**001**      | Aggiunta alla tabella <b>project</b>, del database <b>efof_lpiarch2018</b>, la colonna "<b>link_repo</b>" |
  |**002**      | Nella sezione dove si può aggiunge un nuovo progetto, aggiungere all'iterfaccia poter aggiungere il link della repository del progetto|
  |**003**      | Aggiungere la funzinalità sul sito |

---

#### REQ-03

  |ID  |REQ-03                                        |
  |----|----------------------------------------------|
  |**Nome**    | Rivedere funzionalità "Download file documentazione" |
  |**Priorità**|1                     |
  |**Versione**|1.0                   |

---

#### REQ-04

  |ID  |REQ-04                                        |
  |----|----------------------------------------------|
  |**Nome**    | Rivedere lo schema DB |
  |**Priorità**|1                     |
  |**Versione**|1.0                   |
  |            |**Sotto requisiti** |
  |**001**      | Rivedere la tabella "<b>teacher</b>"|
  |**002**      | Introdurre il ruolo "<b>responsabile</b>"|

---

#### REQ-05

  |ID  |REQ-05                                        |
  |----|----------------------------------------------|
  |**Nome**    | Aggiungere Funzionalità "richiedere nuova password", al utente registrato |
  |**Priorità**|1                     |
  |**Versione**|1.0                   |
  |**Note**    | Un utente registrato deve avere la possibilità di richiedere una nuova password |
  |            |**Sotto requisiti** |
  |**001**      | Cotruzione dell'iterfaccia sul sito|
  |**002**      | Implementazione della funzionalità|

---

#### REQ-06

  |ID  |REQ-06                                       |
  |----|----------------------------------------------|
  |**Nome**    | Funzionalità Responsabile |
  |**Priorità**|1                     |
  |**Versione**|1.0                   |
  |**Note**    | Un utente di tipo reponsabile deve avere diverse funzionalià che solo lui possiede, tra cui: <br style="line-height: 30px;"> <ul> <li>aggiungere progetti</li> <li>modificare i suoi progetti già esistenti</li> </ul>|
  |            |**Sotto requisiti** |
  |**001**      | Aggiungere la funzione al responsabile,che solo lui può aggiungere un progetti.|
  |**002**      | Implementazione della funzionalità|

---

#### REQ-07

  |ID  |REQ-07                                        |
  |----|----------------------------------------------|
  |**Nome**    | Funzionalità ricerca all'interno di documenti pdf|
  |**Priorità**|1                     |
  |**Versione**|1.0                   |
  |**Note**    | Deve esistere la possibilità di cercare della parole o pezzi di testo all'interno dei documenti pdf del progetto. |

---

#### REQ-08

  |ID  |REQ-08                                     |
  |----|----------------------------------------------|
  |**Nome**    | Funzionalità Amministratore |
  |**Priorità**|1                     |
  |**Versione**|1.0                   |
  |**Note**    | Un utente di tipo amministratore deve avere diverse funzionalià  che solo lui possiede, tra cui: <br style="line-height: 30px;"> <ul> <li>Possibilità di modificare i permessi</li> <li>Abilitazione/Disabilitazione</li> <li>Possibilità di modificare i dati dell'utente</li></ul>|
  |            |**Sotto requisiti** |
  |**001**      | Possibilità di modificare i permessi |
  |**002**      | Possibilità di Abilitazione/Disabilitazione |
  |**003**      | Possibilità di modificare i dati dell'utente |

---

<br>

### Pianificazione

Appena iniziato il progetto mettiamo giù la pianificazione, per sapere come sarà svolto il progetto e subito dopo tutte le analisi sul progetto.
Dopo svolgiamo uno alla volta la pianificazione e poi l'implementazione di ogni modulo, testando pure il loro funzionamento individuale e tutti insieme all'interno del sito.

---

<img src="Scheduling/Gantt.png" alt="Gantt" border="5">

---

<br>

### Analisi dei mezzi

<br>

#### Software

I software presenti sui nostri PC:
- Atom 1.34.0
- Microsoft Project

<br>

#### Hardware

- Apple MacBook Pro 15" 2018, Processore Intel&reg; Core I7, RAM 16GB, Disk 512GB SSD, Mac OS X 10.14.3
- Acer Aspire V Nitro, Intel&reg; Core I7, RAM 16GB, SSD 256GB e HDD 2TB,Windows 10 Home 64 bit

<br>

## Progettazione

<br>

### Design dell’architettura del sistema

<br>

### Design dei dati e database

<br>

### Schema E-R, schema logico e descrizione.

---

#### [REQ-02](#req-02) | Link repository

Aggiungere la colonna <b>link-repo"</b> alla tabella già esistente "project".
La nuova colonna sarà di tipo testo.

project(<br>
&emsp;id int(11),<br>
&emsp;title varchar(40),<br>
&emsp;description varchar(200),<br>
&emsp;final_vote int(11),<br>
&emsp;progress int(11),<br>
&emsp;comment longtext,<br>
&emsp;id_responsible int(11),<br>
&emsp;doc_path varchar(260),<br>
&emsp;<b>link_repo text</b><br>
)

---

<br>

### Design delle interfacce

---

#### [REQ-02](#req-02) | Link repository

Quando si vuole aggiungere un nuovo progetto, oltre agli altri campi già presenti deve essere visualizzato anche un capo dove poter inserire il link della repository del progetto stesso.

<img src="../design/DesignInterfaces/LinkRepository/linkRepositoryDesgn.svg" alt="link_repo" border="5" with=700 height=500>

---

#### [REQ-07](#req-07) | Ricerca all'interno di pdf

Quando si vuole cercare, deve esserci la possibilità di cercare all'interno dei pdf dei progetti, la ricerca nei PDF sarà solo fatta se è stato messo il check su "Cerca nei pdf",
una volta fatta la ricerca verrà visualizzata una tabella dove coparirà i documenti dove sono state trovate delle occorrenze, il loro numero e il progetto a cui appartine il documento.


<img src="../design/DesignInterfaces/RicercaInPDF/ricercaInPDF.png" alt="ri-pdf" border="5" width=70% height=80%>

---

#### [REQ-08](#req-08) | Funzionalità amministratore

Quando il l'amministratore effettua il login, devono essere visualizzati tutti i dati degli utenti (Allievi e Docenti). Oltre ai dati bisogna essere presente un campo per eliminare l'utente, una colonna per modificare i dati di esso e una colonna che specifica se l'utente è abilitato o disabilitato. La colonna che serve per eliminare un utente avrà presente una "x" per ogni riga ed essa eliminerà l'utente. La colonna che serve per modificare un utente avrà presente "modifica" per ogni riga e questo permetterà di modificare i dati dell'utente. La colonna "Granted" e "Abilita/disabilita" saranno delle select così che venga scelta unôpzione tra quelle a disposizione.

<p align="center">
<img src="../design/DesignInterfaces/FunzionalitaAmministratore/funzionalitaAmministratore.jpg" alt="link_repo" border="5">
</p>

---
<br>


## Implementazione

<br>

## Test

<br>

### Protocollo di test

#### REQ-01

  |Test Case  |TC-001                                     |
  |----|----------------------------------------------|
  |**Riferimento**    |  REQ-001|
  |**Nome**    | REQ-001 |
  |**Descrizione**| Viene controllato in modo generale il sito web, viene controllato se sono presenti tutte le funzionalità, se è possibile consultare i documenti dei progetti, se in base alla ricerca vengono visualizzati i progetti.                    |
  |**Prerequisiti**| Deve essere possibili accedere al sito web |
  |**Procedura**   | Come prima cosa entrare nel sito web, fare il login e una volta fatto apparirà la pagina Home, nella quale sono presenti i vari progetti. </li></ul>|
  |**Risultati attesi**      | L'utente riesce a fare l'accesso e vedere tutti i progetti. |

### Risultati test

<br>

### Mancanze/limitazioni conosciute

<br>

## Consuntivo

<br>

## Conclusioni

<br>

### Sviluppi futuri
    Il sito è già abbastanza completo ma si potrebbe gestire la

<br>

### Considerazioni personali
    Questo progetto è stato utile per applicare i concetti visti durante il nostro percorso scolastico e per rinfrescare i moduli fatti in precedenza. È interessante il fatto che vengono usati più linguaggi di programmazione diversi per raggiungere l'obiettivo e la combinazione degli stessi porta ad avere un sito come il nostro. Il tempo è quello più difficile da gestire, poiché nel caso ci sia un problema riscontrato, esso cambia tutta la pianificazione e magari può portare a non avere il prodotto finito per la data concordata.

<br>

### Sitografia

    <a href="https://www.w3schools.com/php7/default.asp">https://www.w3schools.com/php7/default.asp</a>
    <a href="https://phppot.com/mysql/mysql-fetch-using-php/">https://phppot.com/mysql/mysql-fetch-using-php/</a>
    <a href="https://forum.mrwebmaster.it/threads/modifica-dati-in-tabella-php-sql.33614/">https://forum.mrwebmaster.it/threads/modifica-dati-in-tabella-php-sql.33614/</a>

<br>

## Allegati

-   Diari di lavoro
-   Quaderno dei compiti
