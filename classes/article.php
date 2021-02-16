<?php 
include_once __DIR__ . 'user.php';

/** classe articoli user 
 * @author Alfredo Lozano alfredogregorio.lozano@gmail.com
 * @copyright 2021 by Alfredo Lozano.
 */
 class Article extends User{
     private $id_articolo;
     public $titolo;
     public $data_di_pubblicazione;
     public $visualizzazioni;
     public $numero_di_condivisioni;
     public $numero_commenti;

    public function __construct (string $titolo, string $data_di_pubblicazione, int $visualizzazioni, int $numero_di_condivisioni, int $numero_commenti) {
        $this->titolo = $titolo;
        $this->data_di_pubblicazione = $data_di_pubblicazione;
        $this->visualizzazioni = $visualizzazioni;
        $this->numero_di_condivisioni = $numero_di_condivisioni;
        $this->numero_commenti = $numero_commenti;
    }
 }
 
