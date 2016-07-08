<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$v = new vote;
$v->vote('', 1, 'asd');
/**
 * Description of vote
 *
 * @author changdi
 */
class vote {
    //put your code here
    
    const ONE_WEEK_IN_SECONDS = 7 * 86400;
    const VOTE_SCORE = 432;
    
    public function vote($conn,$user,$item){
        $cutoff = time() - self::ONE_WEEK_IN_SECONDS;
        
    }
    
}
