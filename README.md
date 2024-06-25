# Sistema di Gestione Portfolio con Laravel

## Obiettivo

L'obiettivo di oggi è creare il nostro sistema di gestione del portfolio utilizzando Laravel.

## Modus Operandi

### Preparazione:
- Copiato il template da GitHub.
- Installato le dipendenze.
- Sostituito la cartella `views` con quella fornita da Olga.

### Milestone 1:

#### Migration `create_project_table`
- Creata la migration `create_project_table`.
- Definite le colonne: `title`, `content`, `slug`.

#### Seeder `ProjectTableSeeder`
- Creato `ProjectTableSeeder`.
- Utilizzato `Str` per generare gli slug.
- Utilizzato Faker:
  - `title` generato con `sentence` con un massimo di 3 parole.
  - `content` generato con `text` con un massimo di 500 caratteri.
  - `slug` generato con `Str::slug` basato sul titolo.

#### Modello `Project`
- Creato il modello `Project` corrispondente alla migration.
- Aggiunto `protected $table` nel modello a causa di problemi con il Seeder e `db:seed`.
- Aggiunto `fillable` per consentire l'assegnamento di massa.

### Milestone 2:

#### Controller delle Risorse `ProjectController`
- Creato `ProjectController` come controller delle risorse.
- Aggiunte le rotte per il controller all'interno del Middleware.

#### Risolto Problema della Rotta del Dashboard
- Risolto problema di routing per `dashboard` in `Admin.blade.php` spostando il file in `views/Admin`.

#### Funzioni Implementate in `ProjectController`
- Implementate le funzioni `index`, `create` e `store` con le rispettive validazioni.

#### Creazione delle Viste e delle Rotte
- Creati `index.blade.php` e `create.blade.php`.
- Aggiunta la rotta per `index` nel menu `Admin` nella barra laterale sinistra.

#### Aggiunto Form in `create.blade.php`
- Aggiunto il form per la creazione del progetto in `create.blade.php`.

#### Visualizzazione dei Progetti in `index.blade.php`
- Aggiunta la funzionalità per visualizzare i progetti in `index.blade.php`.

### Milestone 3:

#### Completamento del CRUD
- implementate le funzioni `show` e `delete` senza softdeletes

#### modifica della rotta per implementare slug
- nel file `web.php` aggiunto parametro `slug` come metodo di richiamo valore

#### creazione pulsanti ed assegnazione rotte alle funzioni create
- Aggiunte le funzioni `mostra` ed `elimina` nella pagina `index` per ogni elemento con riferimento allo `slug`
  

