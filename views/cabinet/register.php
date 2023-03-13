<?php include ROOT . '/views/layouts/header.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if ($result): ?>
                    <p>Вы зарегестрированны!</p>
                <?php else: ?>
                    <?php if(isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Регистрация компании</h2>
                        <form action="#" method="post">
                            <p>Выберите компанию:</p>
                            <!-- выбор компаний -->
                            <select name="company" id="" >
                                <?php foreach ($latestCompany as $company): ?>
                                    <option value="">
                                        <p><?php echo $company['name'] ?></p>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <p> </p>
                            <!--  -->
                            <input type="text" name="name" placeholder="Название компании" value="<?php echo $name; ?>"/>
                            <input type="text" name="psnr" placeholder="ОГРН:"value="<?php echo $psnr; ?>"/>
                            <input type="text" name="tin" placeholder="ИНН:"value="<?php echo $tin; ?>"/>
                            <input type="text" name="cor" placeholder="КПП:" value="<?php echo $cor; ?>"/>
                            <input type="text" name="che_a" placeholder="Р/счет №:"value="<?php echo $che_a; ?>"/>
                            <input type="text" name="cor_a" placeholder="Корр/счет №:"value="<?php echo $cor_a; ?>"/>
                            <input type="text" name="bic" placeholder="БИК:" value="<?php echo $bic; ?>"/>
                            <input type="text" name="bank" placeholder="Банк:"value="<?php echo $bank; ?>"/>
                            <input type="text" name="legal_adrs" placeholder="Юр. адрес:"value="<?php echo $legal_adrs; ?>"/>
                            <input type="text" name="actual_adrs" placeholder="Фак. адрес:" value="<?php echo $actual_adrs; ?>"/>
                            <input type="email" name="email" placeholder="E-mail"value="<?php echo $email; ?>"/>
                            <input type="text" name="general_director" placeholder="Генеральный директор:"value="<?php echo $general_director; ?>"/>
                            <input type="submit" name="submit" class="btn btn-default" value="Добавить компанию" />
                        </form>
                    </div><!--/sign up form-->
                    <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>