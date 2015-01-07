<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Student 
{
    
    function _construct() 
    {
        $this->lname = "";
        $this->fname = "";
        $this->emails = array();
        $this->grades = array();
    }
    
    function add_email( $who, $addr ){$this->emails[$who] = $addr;}
    function add_grade( $grade ){ $this->grades[] = $grade; }
    
    function average()
    {
        $total = 0;
        foreach( $this->grades as $value )
        {
            $total += $value;
        }
        return $total/count($this->grades);
    }
    
    function toString()
    {
        $result = $this->fname.' '.$this->lname;
        $result .= ' ('.$this->average().")\n";
    }
}