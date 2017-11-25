<?php
namespace Drupal\ErrorPageModule\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Provides route responses for the Test module.
 * 
 * @author ladam
 */
class MyErrorPage 
{
     /**
     * Returns a simple error page.
     *
     * @return array
     *   A simple renderable array.
     */
    public function on404() 
    {
        $element = array(
            '#markup' => 'Error Page',
        );
        return $element;
    }
    
    
}
