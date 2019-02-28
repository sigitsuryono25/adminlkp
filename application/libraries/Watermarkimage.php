<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Watermarkimage
 *
 * @author Sigit Suryono
 */
class Watermarkimage {

    function add_mark($param, $Marktext, $fonSize) {
        $path = $_SERVER['DOCUMENT_ROOT'] . 'CodeIgniter/WebBerita/assets/gambar/';
        $image = new Imagick();
        $image->readimage($path . $param);
        $watermark = new Imagick();
        $mask = new Imagick();
        $draw = new ImagickDraw();

// Define dimensions
        $width = $image->getImageWidth();
        $height = $image->getImageHeight();

// Create some palettes
        $watermark->newImage($width, $height, new ImagickPixel('grey30'));
        $mask->newImage($width, $height, new ImagickPixel('black'));

// Set font properties
        $draw->setFont('Arial');
        $draw->setFontSize($fonSize);
        $draw->setFillColor('grey70');

// Position text at the bottom right of the image
        $draw->setGravity(Imagick::GRAVITY_SOUTHEAST);

// Draw text on the watermark palette
        $watermark->annotateImage($draw, 10, 12, 0, $Marktext);

// Draw text on the mask palette
        $draw->setFillColor('white');
        $mask->annotateImage($draw, 11, 13, 0, $Marktext);
        $mask->annotateImage($draw, 10, 12, 0, $Marktext);
        $draw->setFillColor('black');
        $mask->annotateImage($draw, 9, 11, 0, $Marktext);

// This is needed for the mask to work
        $mask->setImageMatte(false);

// Apply mask to watermark
        $watermark->compositeImage($mask, Imagick::COMPOSITE_COPYOPACITY, 0, 0);

// Overlay watermark on image
        $image->compositeImage($watermark, Imagick::COMPOSITE_DISSOLVE, 0, 0);

// Set output image format
        $image->setImageFormat('png');

// Output the new image
//        header('Content-type: image/png');
//        echo $image;
        echo realpath(APPPATH . '../assets/gambar/' . $param . $image->getformat());
//        echo $image;
        file_put_contents(realpath(APPPATH . '../assets/gambar/' . $param . $image->getformat()), $image); // works, or:
    }

    function add_mark_arround($param) {
// Create objects
//        $path = realpath(APPPATH . '/../assets/gambar/');
//        echo $_SERVER['DOCUMENT_ROOT'] ;
        $path = $_SERVER['DOCUMENT_ROOT'] . 'CodeIgniter/WebBerita/assets/gambar/';
        $image = new Imagick();
        $image->readimage($path . $param);
        $watermark = new Imagick();
        $mask = new Imagick();
        $draw = new ImagickDraw();

// Define dimensions
        $width = $image->getImageWidth();
        $height = $image->getImageHeight();

// Create some palettes
        $watermark->newImage($width, $height, new ImagickPixel('grey30'));
        $mask->newImage($width, $height, new ImagickPixel('black'));

// Watermark text
        $text = 'LTI';

//        $text = 'Copyright';
// Create a new drawing palette
//        $draw = new ImagickDraw();
        $watermark->newImage(140, 80, new ImagickPixel('none'));

// Set font properties
        $draw->setFont('Arial');
        $draw->setFillColor('grey');
        $draw->setfontsize(20);
        $draw->setFillOpacity(.5);

// Position text at the top left of the watermark
        $draw->setGravity(Imagick::GRAVITY_NORTHWEST);

// Draw text on the watermark
        $watermark->annotateImage($draw, 10, 10, 0, $text);

// Position text at the bottom right of the watermark
        $draw->setGravity(Imagick::GRAVITY_SOUTHEAST);

// Draw text on the watermark
        $watermark->annotateImage($draw, 5, 15, 0, $text);

// Repeatedly overlay watermark on image
        for ($w = 0; $w < $image->getImageWidth(); $w += 140) {
            for ($h = 0; $h < $image->getImageHeight(); $h += 80) {
                $image->compositeImage($watermark, Imagick::COMPOSITE_OVER, $w, $h);
            }
        }
        $image->setImageFormat('png');
        echo realpath(APPPATH . '../assets/gambar/' . $param . $image->getformat());
        file_put_contents(realpath(APPPATH . '../assets/gambar/' . $param . $image->getformat()), $image); // works, or:
    }

}
