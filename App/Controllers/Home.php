<?php

namespace App\Controllers;

use Core\View;
use NcJoes\OfficeConverter\OfficeConverter;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *œœ
     * @return void
     */
    public function indexAction()
    {
        $path = getcwd();
        $file = $path.'/file/dfff.docx';
        $converter = new OfficeConverter($file);
        $converter->convertTo('output-file.pdf'); //generates pdf file in same directory as test-file.docx
        $converter->convertTo('output-file.html'); //generates html file in same directory as test-file.docx

//        //$converter = new OfficeConverter('test-file.docx', 'path-to-outdir');
        View::renderTemplate('Home/index.html');
    }
}
