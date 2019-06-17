<?php

require_once('../includes/helpers.php');

// determine which page to render
if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'index';
    
// show page
switch ($page)
{
    case 'index':
        render('templates/header', array('title' => 'Alex Peden Pizzas'));
        render('index');
        render('templates/footer');
        break;

    case 'pizzas':
		render('templates/header', array('title' => 'Pizzas'));
		render('pizzas');
        render('templates/footer');
        break;

    case 'pizza':

        if (isset($_GET['n']))
        {
            render('templates/header', array('title' => 'Pizza ' . $_GET['n']));
            render('pizza', array('n' => $_GET['n']));
            render('templates/footer');
        }
        break;
}

?>
