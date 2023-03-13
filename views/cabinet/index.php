<?php include ROOT . '/views/layouts/header.php'; ?>


<!-- <section>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h3>Кабинет пользователя: <?php echo $user['name'] ?></h3>

                            <ul class="panel-group category-products">
                                <li class=" panel panel-default"><a href="/cabinet/order">Заказы</a></li>
                                <li class=" panel panel-default"><a href="/user/company"><i class="fa fa-user"></i> Мои компании</a></li>
                                <li class=" panel panel-default"><a href="#">Корзина</a></li>
                                <li class=" panel panel-default"><a href="#">Баланс и Оплата</a></li>
                            </ul>
                            <!-- <?php foreach ($lastCompany as $company): ?>
                                <table class="table-bordered table-striped table">
                                    <p><h5 class="title text-center">Имя компании: "<?php echo $company['name'] ?>"</h5></p>
                                    <tr><th>ОГРН:</th><td><?php echo $company['psnr'] ?></td></tr>
                                    <tr><th>ИНН:</th><td><?php echo $company['tin'] ?></td></tr>
                                    <tr><th>КПП:</th><td><?php echo $company['cor'] ?></td></tr>
                                    <tr><th>Р/счет №:</th><td><?php echo $company['che_a'] ?></td></tr>
                                    <tr><th>Корр/счет №:</th><td><?php echo $company['cor_a'] ?></td></tr>
                                    <tr><th>БИК:</th><td><?php echo $company['bic'] ?></td></tr>
                                    <tr><th>Банк:</th><td><?php echo $company['bank'] ?></td></tr>
                                    <tr><th>Юр. адрес:</th><td><?php echo $company['legal_adrs'] ?></td></tr>
                                    <tr><th>Фак. адрес:</th><td><?php echo $company['actual_adrs'] ?></td></tr>
                                    <tr><th>Email:</th><td><?php echo $company['email'] ?></td></tr>
                                    <tr><th>Генеральный директор:</th><td><?php echo $company['general_director'] ?></td></tr>
                                </table>
                            <?php endforeach;?>          -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section>
<div class="container">
    <div style="text-align: center;" class="col-sm-12">
        <h3><span class='span'>Кабинет пользователя: <?php echo $user['name'] ?></span></h3>
        <ul class="panel-group category-products">
            <li class="panel panel-default"><a href="/cabinet/order" class="btn btn-default back"><i class="fa fa-archive" aria-hidden="true"></i> Заказы</a></li>
            <li class="panel panel-default"><a href="/user/company" class="btn btn-default back"><i class="fa fa-user"></i> Мои компании</a></li>
            <li class="panel panel-default"><a href="/cart/" class="btn btn-default back"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
        </ul>
    </div> 
</div>
</section>
<style>
    .category-products{
        display: grid;
        text-align: center;
        padding: 0px;
    }
    .panel-default{
        display: grid;
        text-align: center;
        border: ;
    }
</style>







<?php include ROOT . '/views/layouts/footer.php'; ?>