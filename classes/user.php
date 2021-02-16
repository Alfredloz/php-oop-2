<?php 


/** classe User blog
 * @author Alfredo Lozano alfredogregorio.lozano@gmail.com
 * @copyright 2021 by Alfredo Lozano.
 */
class User{
    public $nome;
    public $cognome;
    public $email;
    public $nascita;
    public $data_iscrizione;
    public $data_ultimo_articolo;
    public $numero_articoli;
    public $numero_commenti;

    public function __construct(string $nome, string $cognome, string $email, string $nascita, string $data_iscrizione, string $data_ultimo_articolo, int $numero_articoli, int $numero_commenti){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->nascita = $nascita;
        $this->data_iscrizione =$data_iscrizione;
        $this->data_ultimo_articolo = $data_ultimo_articolo;
        $this->numero_articoli = $numero_articoli;
        $this->numero_commenti = $numero_commenti;
    }
}