<?php
require './view/components/header.php' ?>

    <div class="row mt-5 pt-3 text-center justify-content-center">
        <div class="">
            <h2><?=$title?></h2>
        </div>
    </div>
<div class="site-section" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form method="POST" class="p-0">
                    <div class="row ">
                        <div class="col-md-4">
                            <label class="text-black">Логин</label>
                            <input type="text" name="login" class="form-control"
                        placeholder="логин" value="<?=$input['login'] ?? ''?>">
                            <span class="text-danger"><?=$errors['login'] ?? ''?></span>
                        </div>
                    </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label class="text-black">Пароль</label>
                                <input type="password" name="password" class="form-control"
                           placeholder="пароль" value="<?=$input['password'] ?? ''?>">
                                <span class="text-danger"><?=$errors['password'] ?? ''?></span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 py-4">
                            <input type="submit" value="Войти" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require './view/components/footer.php'?>