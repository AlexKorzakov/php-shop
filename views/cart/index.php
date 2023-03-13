<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Корзина</h2>
                    
                    <?php if ($productsInCart): ?>
                        <p><h5>Вы выбрали товары:</h5></p>
                        <table  class="table-bordered table-striped table">
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <th>Количество, шт</th>
                                <th>Сумма НДС, руб</th>
                                <th>Стоимость, руб</th>
                                <th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code']; ?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id']; ?>">
                                            <?php echo $product["name"]; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $productsInCart[$product['id']]; ?></td>
                                    <td><?php echo ($product['price'] *(20/120)); ?> р.</td>
                                    <td><?php echo $product['price']; ?> р.</td>
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="3">Итого:</td>
                                    <td><?php echo $nds; ?> р.</td>
                                    <td><?php echo $totalPrice; ?> р.</td>
                                    <td></td>
                                </tr>
                        </table>
                        <a class="btn btn-default checkout" href="/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                    <?php else: ?>
                        <p><h5 class="title text-center">Корзина пуста</h5></p>

                        <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться к покупкам</a>
                    <?php endif; ?>                   

                </div><!--features_items-->


            </div>
        </div>
    </div>
</section>
<!-- <style>
    /* table {
    table-layout:fixed;
    width:100%;
    border:1px solid #f00;
    word-wrap:break-word;
} */
</style> -->
<style>

    @media screen and (max-device-width: 420px) {
        table {
            table-layout:fixed;
            width:100%;
            border:1px solid #f00;
            word-wrap:break-word;
        }
        .checkout{
            margin-bottom: 20px;
        }
        .col-sm-9{
            padding-left: 0px;
        }
        td{
            font-size: 62.5%;
        }
    }

    @media screen and (max-device-width: 668px) {
        .col-sm-9{
            padding-left: 0px;
        }
        .checkout{
            margin-bottom: 20px;
        }
    }
</style>



<?php include ROOT . '/views/layouts/footer.php'; ?>