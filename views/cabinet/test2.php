<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    
    <div class="container">
        <div class="row">
        <h4 class="title text-center">История заказов компаний</h4>
        <br/>
            <!-- <ul>
                <?php foreach ($lastCompany as $company): ?>
                    <li><a href=""><?php echo $company['name']; ?></a></li>
                <?php endforeach; ?>
            </ul> -->
                <table class="table-bordered table-striped table">
                    <tr>
                        <th class="title text-center">Имя компании</th>
                    </tr>
                    <?php foreach ($lastCompany as $company): ?>
                        <tr>
                            <td class="title text-center"><a href="/user/order/<?php echo $company['id']; ?>"><?php echo $company['name']; ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
        </div>
    </div>
</section>
<!-- <div class="container">
    <div class="row">
        <h3>Кабинет пользователя: <?php echo $user['name'] ?></h3>
        <form action="#" method="post">
            <select name="company" id="company">
                <option value="">Выберите компанию:</option>
                <?php foreach ($lastCompany as $company): ?>
                    <option  value="<?php echo $company['name'] ?>">
                        <p><?php echo $company['name'] ?></p>
                    </option>
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            <input type="submit" name="submit" class="btn btn-default" value="Показать" />
        </form>
    </div>
    <br>
</div> -->






<?php include ROOT . '/views/layouts/footer.php'; ?>