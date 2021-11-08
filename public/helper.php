<?php
/* Para formatar a data com format 06-12-1992 */
function formatDate($data=null){
    if($data){
       $data = explode('-', $data);/* Deletou o -  */

        return $data[2] .'/'. $data[1] .'/'.$data[0]; /* Inseriu o / */
    }
}