<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
        <h4>Просмотр заказа #<?php echo $order['id']; ?></h4>
        <h5>Информация о заказе</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Номер заказа</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Имя клиента</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клиента</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Комментарий клиента</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клиента</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td><?php if ($order['status'] = 1): ?>
                            <?php echo "Оплачен" ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>
            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул товара</th>
                    <th>Название</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Сумма НДС</th>
                    <th>Всего с НДС:</th>

                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?> шт.</td>
                        <td><?php echo $product['price']; ?> р.</td>
                        <td><?php echo (($product['price'] * $productsQuantity[$product['id']]) * (20/120)); ?> р.</td>
                        <td><?php echo ($product['price'] * $productsQuantity[$product['id']]); ?> р.</td>

                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

        <a href="/cabinet/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        <br>
        <br>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>

