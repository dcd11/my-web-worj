<?php require 'components/header.php'?>

 <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-around">
                <div class="col-md-5 text-center">
                    <h2>Добро пожаловать, <?=$_SESSION['validUser']?></h2>
                </div>
            </div>

            <div class="align-content-center">
                <div>


                    <div class="  lk-user-info "><p class="mb-2">Логин:
                            <span><?=$userInfo['login']?></span> <a href="?edit=login"><i class="icon-pencil"></i></a></p>

                        <?php if(isset($_GET['edit']) && $_GET['edit'] === 'login'):?>
                            <form method="POST">
                                <label>Новый логин:</label>
                                <input type="text" name="newLogin">
                                <span class="error"></span>
                                <input type="submit" name="action" value="Обновить логин" class="btn-primary">
                            </form>
                        <?php endif;?>
                        <div class="comment-form-wrap pt-5">
                            <h3>Для заметок</h3>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="message"></label>
                                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Добавить" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>


                    <p>Обратная связь требующая модерации</p>
                        <?php foreach($feedbackList as $feedbackItem):?>

                                    <span class="post-category text-white
                                    pb-md-5"><?=$feedbackItem['type']?></span>

                                            <div class="post-meta align-items-center text-left clearfix">
                                                <span class="d-inline-block mt-1">By <a
                                                            href="mailto:<?=$feedbackItem['email']?>"><?=$feedbackItem['fName'].' '
                                                        .$feedbackItem['lName']?></a></span>
                                                <span> <?=substr
                                                    ($feedbackItem['addDate'], 0, 10 )?></span>
                                                <br><br>  </div><p><?=$feedbackItem['comment']?></p>
                        <?php endforeach;?>
                                    <?php if($feedbackItem['approved'] === "1"){
                                        echo "<p>Добавлен</p>";
                                    }else{
                                        echo "<p class='text-danger'>требует модерации</p>";
                                    }
                                    ?>

                                        <form method="POST">
                                            <label>опубликовать?:</label>
                                            <input type="text" name="approved">
                                            <span class="error"></span>
                                            <input type="submit" name="action" value="обновить публикацию"
                                                   class="btn-primary">
                                        </form>
                                    <?php
                                    if(isset($_POST['action']) && $_POST['action'] === 'обновить публикацию'){

                                        $approved = htmlspecialchars(trim($_POST['approved']));

                                        Feedback::updateApproved($approved, $feedbackItem['id']);

                                    };?>


                                </div>
                            </div>



                </div>
            </div>
        </div>
    </div>




<?php require 'components/footer.php';