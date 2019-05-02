<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

echo $_SERVER['PHP_SELF'];
die;

?>


<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
echo THIS_PAGE;

die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Matt's WEB120 Title Page";
    break;

    case 'contactme.php':
        $title = "Matt's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Matt';
    break;



    default:
        $title = THIS_PAGE;
}


?>