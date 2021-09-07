<?php

/*
Oggi pomeriggio provate ad immaginare quali sono 
le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti 
da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l’ereditarietà 
dove necessario;
ad esempio ci potrebbero essere degli utenti premium 
che hanno diritto a degli sconti esclusivi, oppure 
diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: 
ad esempio, l’utente dello shop inserisce 
una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); 
BONUS: Gestite eventuali eccezioni che si 
possono verificare (es: carta di credito scaduta).
*/

class EShop{

    public $name; //null

    public $site; //null

    private $acquisti = [];

    public function _construct(string $nomeEShop, string $nomeSito) {
        $this->name = $nomeEShop;
        $this->site = $nomeSito;
    }
}

// -----------------------------------------------------

class Product{

    protected $label = 'prodotto generico';
    protected $tipo;
}

class TechProduct extends Product {

    public $prezzo = 2500;

    public function _construct() {
        $this->laber = 'RTX 3090';
        $this->tipo = 'Prodotto Tech';
    }
}

// -----------------------------------------------------

class SportProduct extends product {

    public $prezzo = 100;

    public function _construct() {
        $this->laber = 'Guantoni 12OZ Leone';
        $this->tipo = 'Prodotto Sportivo';
    }

}

// -----------------------------------------------------

class User {
    public $sconto = 0;
}

// -----------------------------------------------------

class PremiumUser {
    public $sconto = 50;
}

/*

1. creare Eshop
2. creare prodotti
3. aggiungere all' Eshop
4. creare l'utente
5. creare l'utente premium
6. inserire la carta di credito per ciascun utente
7. utente normale acquista
8. utente premium acquista con lo sconto

*/