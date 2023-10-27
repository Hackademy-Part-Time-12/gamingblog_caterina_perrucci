## CRUD
Create Read Update Delete
- index (lista di tutte le risorse)
- create + store (creare una nuova risorsa e la salva nel db)
- edit + update (aggiorna una risorda nel db)
- show (mostra una singola risorsa)
- delete (cancella una risorsa)

## Relazioni
# One-To-One / One-To-Many / Many-to-Many

One-To-One (o relazione uno a uno)
relaziona un record di una tabella a un solo record di un'altra tabella e viceversa
es Persona 1 -> CF 1
    CF 1 -> Persona 1

One-To-Many (o relazione uno a molti)
relaziona un record della prima tabella a molti record della seconda tabella
es Persona 1 -> Articolo 1
es Persona 1 -> Articolo 2

ma ogni record della seconda tabella può appartenere solo a un record della prima tabella 
es Articolo 1 -> Persona 1 

Many-to_Many (o relazione molti a molti )
relaziona più record di una tabella a più record di un'altra tabella
es Studente 1 -> Corso 1
es Studente 1 -> Corso 2
es Corso 1 -> Studente 1 
es Corso 1 -> Studente 2

