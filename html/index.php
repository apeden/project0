<?php

require_once('../includes/helpers.php');

// determine which page to render
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    echo ('this was activated!');
	$page = 'index';
    
// show page
switch ($page)
{
    case 'index':
        render('templates/header', array('title' => 'CSCI S-74'));
        render('index');
	render('templates/footer');
        break;

    case 'lectures':
        render('templates/header', array('title' => 'Lectures'));
        render('lectures');
        render('templates/footer');
        break;

    case 'lecture':
		echo ("case lecture activated in switch");
        /*if (isset($_GET['n']))
        //{
            render('templates/header', array('title' => 'Lecture ' . $_GET['n']));
            render('lecture', array('n' => $_GET['n']));
            render('templates/footer');
        }*/
        break;
}

?>
