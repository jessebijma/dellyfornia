<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/functs.php';




// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Dellyfornia');

$templateParser->assign('headerText', 'In opdracht voor het Media College Amsterdam');

$templateParser->display('head.tpl');

$templateParser->display('header.tpl');
// Display template: output html



$action= isset($_GET['action'])?$_GET['action']: 'home';

switch ($action) {

    case 'fotos':

        $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
        include('model/get_nr_newsarticles.php');
        include('model/select_photos.php');


        $templateParser->assign('result2', $result2);

        $templateParser->display('fotos.tpl');


        break;

    case 'videos':

        include("model/select_videos.php");

        $templateParser->assign('result1', $result1);

        $templateParser->display('videos.tpl');

        break;


    case 'zoeken':

        $templateParser->display('zoeken.tpl');

        break;

    case 'home':

        $templateParser->display('home.tpl');

        break;

    case 'news':

        include("model/select_newsarticles.php");

        $templateParser->assign('result', $result);
        $templateParser->display('newsarticles.tpl');

        break;

    case  'admin':
        //go to cms
        $cms_action =isset($_GET['cms_action'])?$_GET['cms_action']:"show";

        switch($cms_action)
        {

            case 'show':
                include("model/select-all-items.php");

                $templateParser->assign('result3', $result3);
                $templateParser->display('cms_show.tpl');
                break;

            case 'delete':
                //delete one item

                $id = $_GET['id'];
                include("model/delete-item.php");
                break;

            case 'insert':
            //insert an item


                include("model/insert-item.php");


                $templateParser->display('csm_insert.tpl');
                if (isset($_GET['submit'])) {
                    $title = $_GET['title'];
                    echo $title;
                }


                break;

            case 'edit':
                //edit an item



        }
}


$templateParser->assign('footerText', 'In opdracht voor het Media College Amsterdam');

$templateParser->display('footer.tpl');
