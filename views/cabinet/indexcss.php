<?php include ROOT . '/views/layouts/header.php'; ?>

<div class="container">
    <div style="padding-left: 0px;" class="col-sm-8">
        <h1><span class='clu' style="background-color: #c1eac6;">Кабинет пользователя:<span></h1>
    </div>
</div>
<br>
<div class="container">
        <div style="padding-left: 0px;" class="col-sm-5">
            <ul style="padding-left: 0px;" class="uno">
                <li class="cl"><a style="color: black;" href="/cabinet/order">Заказы</a></li>
                <a style="color: black;" href="#"><li class="cl">Корзина</li></a>
            </ul>
        </div>
</div>
<div class="container">
        <div style="padding-left: 0px;" class="col-sm-5">
            <ul style="padding-left: 0px;" class="unod">
                <li class="cli"><a style="color: black;" href="/user/company"><i class="fa fa-user"></i> Мои компании</a></li>
            </ul>
        </div>
</div>
<br>
<style>
    .uno{
        display: flex;
        justify-content: space-between;
    }
    .cli{
        border: solid;
        border-color: #FE980F;
        margin: 12px;
        padding: 11px;
        text-align: center;
    }
    .cl{
        border: solid;
        border-color: #FE980F;
        margin: 12px;
        padding: 10px 70px 10px 70px;
        text-align: center;
    }
    .clu{
        border: solid;
        border-color: #FE980F;
        margin: 12px;
        padding: 10px 30px 10px 30px;
        text-align: center;
    }
</style>






<?php include ROOT . '/views/layouts/footer.php'; ?>