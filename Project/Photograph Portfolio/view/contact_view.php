<?php
require 'view/components/header.php';


?>
    <div class="site-section"  data-aos="fade">

        <div class="container">


            <div class="row justify-content-center">


                <div class="col-md-7">

                    <div class="row mb-5">

                        <div class="col-12 ">

                            <h2 class="site-section-heading text-center">Обратная связь</h2>

                        </div>

                    </div>

                </div>


            </div>

            <div class="row">
                <div class="col-lg-8 mb-5">
                    <form method="POST">


                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-white">Имя</label>
<input type="text" name="fName" class="form-control" placeholder="Введите имя" value="<?=$input['fName']
    ?? ''?>">
<span class="text-danger"><?=$errors['fName'] ?? ''?></span>
                            </div>
                            <div class="col-md-6">
<label class="text-white">Фамилия</label>
<input type="text" name="lName" class="form-control" placeholder="Введите фамилию" value="<?=$input['lName'] ?? ''?>">
                                <span class="text-danger"><?=$errors['lName'] ?? ''?></span>
                            </div>
                        </div>

                        <div class="row form-group">

<div class="col-md-12">
<label class="text-white">Адрес электронной почты</label>
<input type="email" name="email" class="form-control" placeholder="Введите Email"
       value="<?=$input['email'] ?? ''?>">
<span class="text-danger"><?=$errors['email'] ?? ''?></span>
</div>
</div>



                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-white" >Сообщение</label>
<textarea name="comment"  cols="30" rows="7" class="form-control"
          placeholder="Задайте ваш вопрос или введите сообщение тут..."
                                          value="<?=$input['comment'] ?? ''?>"></textarea>
                                <span class="text-danger"><?=$errors['comment'] ?? ''?></span>
                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-white" aria-label="Default select example">Тип обращения</label>
                                <br>
                                <select name="type" id="standard-select" value="<?=$input['type'] ?? ''?>">
                                    <option value="Сообщение">Сообщение</option>
                                    <option value="Отзыв">Отзыв</option>
                                    <option value="Вопрос">Вопрос</option>
                                    <option value="Заказать фотосессию">Заказать фотосессию</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Отправить" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-lg-3 ml-auto">
                    <div class="mb-3">
                        <p class="mb-0 font-weight-bold text-white">Звоните</p>
                        <p class="mb-4"><a href="tel:+79163413835">+7 916 341 38 35</a></p>

                        <p class="mb-0 font-weight-bold text-white">Телеграм</p>
                        <p class="mb-4"><a href="https://t.me/dcd11" target="_blank">beardo.live</a></p>

                        <p class="mb-0 font-weight-bold text-white">Почта</p>
                        <p class="mb-0"><a href="mailto:igor.dcd11@yandex.ru">igor.dcd11@yandex.ru</a></p>

                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
require './view/components/footer.php';