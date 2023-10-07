<?php


return ['index.php' => 'Home',
        'news.php'=> 'News',
        'shop.php'=> 'Store',
        'cars.php'=> 'Cars',
        'about.php'=> 'Company',
        'contacts.php'=> 'Contact',
    ];


foreach ($menu as $link => $description){
    echo "<li><a href='$link'>$description</a></li>";
};
/*
<li><a href="/">Home</a></li>

            <li><a href="shop.php">Store</a></li>
            <li><a href="cars.php">Cars</a></li>
            <li><a href="about.php">Company</a></li>*/