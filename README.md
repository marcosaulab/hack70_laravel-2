## Creaiamo una welcome page in cui abbiamo delle card -> film / ricette
## Creaiamo una pagina about us in cui abbiamo le card dello staff


## Welcome Page

1. Creare una rotta
2. modifcare la view della welcome page
3. creare un array di dati nella rotta
4. passare i dati alla vista
5. creare una card per ogni elemento dell'array (ciclare l'array...)


# ROTTE NOMINALI

Assegnamo un nome ad una rotta per evitare di usare il suo uri ogni volta

- Nel file di rotta usiamo la funzione ->name('nomerotta')
- Nella vista usiamo la funzione {{ route('nomerotta') }}


# ROTTE PARAMETRICHE

Passiamo un parametro all'interno della nostra rotta e in base a quel parametro 
eseguiamo un'azione: nel nostro caso selezioniamo il film che mi interessa visualizzare in dettaglio


# CONTROLLER
Classe che si occupa di gestire la logica (che attualmente abbiamo inserito all'interno delle route) dopo che 
è stata attivata una route

Come si crea un controller? Usiamo Artisan

Esempio: php artisan make:controller PublicController