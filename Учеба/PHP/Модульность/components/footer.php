<footer>
    <h3>Заголоков</h3>
    <p>А это еще и параграф в футере</p>
    <ul>
    <?php
    foreach ($menu as $link => $description){
        echo "<li><a href='$link'>$description</a></li>";
    };
    ?>
        </ul>
</footer>
</body>
</html>