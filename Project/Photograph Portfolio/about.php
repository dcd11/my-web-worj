<?php
// контроллер для работы и отображения обратной связи
require 'view/components/header.php';
require 'models/Feedback.php';
$feedbackList = Feedback::getfeedbackList();
require 'view/about_view.php';
require './view/components/footer.php';