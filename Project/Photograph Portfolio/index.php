<?php
// контроллер для работы и отображения обратной связи
require 'view/components/header.php';
require 'models/Gallery.php';
$galleryList = gallery::getImage();
require 'view/gallery_view.php';
require './view/components/footer.php';
require './view/components/footer.php';