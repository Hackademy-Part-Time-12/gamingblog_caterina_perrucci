## Relazione Many-to-Many tra Console e Game
# Creare tabella pivot 
    nomi dei modelli al singolare in ordine alfabetico
    es. create_console_game_table
# Strutturare la tabella
    3 colonne:
        id
        console_id -> unsignedBigInteger / foreign key
        game_id -> unsignedBigInteger / foreign key
# Istruire i modelli inserendo le relazioni 
    metodo al plurale (es games()) 
    return $this->belongsToMany // appartiene a tanti ...
    //  public function games(){
            return $this->belongsToMany(Game::class);
        }
# Passare i giochi alla vista con la query all() nel metodo create
     $games = Game::all();
# Nel form di creazione 
    1. ciclare i giochi
    2. far visualizzare all'utente il nome del gioco 
    3. inserire nel value l'id del gioco 
    4. inserire il name con valore un array ad es. name="games[]"
# Nel metodo store collegare (attaccare) la console ai giochi selezionati
    es. $console->games()->attach($request->games); // attach accetta degli id 
--------------------------------------------------------------------------------
# Modifica
# Passare i giochi alla vista con la query all() nel metodo edit
     $games = Game::all();
# Nel form di modifica 
    1. ciclare i giochi
    2. far visualizzare all'utente il nome del gioco 
    3. inserire nel value l'id del gioco 
    4. inserire il name con valore un array ad es. name="games[]"
    5. inserire una condizione che fa vedere i giochi già selezionati checkati
        @if($console->games->contains($game->id)) checked @endif
# Nel metodo update scollegare la console ai giochi selezionati in precedenza e poi attacare i nuovi 
    es. $console->games()->detach();
        $console->games()->attach($request->games); // attach accetta degli id       
-----------------------------------------------------------------------------------------
# Cancellazione
# Inserire nel metodo destroy il detach dei giochi prima dell'eliminazione della console
    es. $console->games()->detach();