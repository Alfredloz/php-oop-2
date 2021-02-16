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
     public $numero_di_visualizzazioni;
     public $numero_di_condivisioni;
     public $numero_commenti;
 }
 
