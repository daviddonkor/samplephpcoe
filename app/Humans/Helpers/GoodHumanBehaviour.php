<?php

/**
 * This is the Good Human Behaviour File which holds the Good behaviour trait.
 * The trait is used by all classes that represent human beings. 
 * Each human is expected to respect and be curteous
 */

namespace Humans\Helpers;

/**
 * Every staff must exhibit good human behaviour.
 * 
 */
trait GoodHumanBehaviour{

    /**
     * Show others respect
     */
    public function showRespect(): String
    {
        return "I am truly sorry!";

    }
    /**
     * Be curteous to people
     * 
     * @return void
     */
    public function beCurteous(): String
    {
        return "Excuse me, may I have that?";
    }
  
}