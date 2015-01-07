<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include('student.php');

$students = array();

foreach( $students as $student )
    echo $students->toString();

$first = new Student();
$first->lname = "Doe";
$first->fname = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student();
$second->lname = "Einstein";
$second->fname = "Albert";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third = new Student();
$third->lname = "Bhatti";
$third->fname = "Nav";
$third->add_email('main','bhatti.nav@gmail.com');
$third->add_email('school','nbhatti3@my.bcit.ca');
$third->add_grade(92);
$third->add_grade(87);
$third->add_grade(83);
$students['a008'] = $third;

echo $first->toString();
echo $second->toString();
echo $third->toString();
