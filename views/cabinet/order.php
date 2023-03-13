<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">
            <h3>Кабинет пользователя: <?php echo $user['name'] ?></h3>
            <form action="POST">
                <select name="company" class="target">
                    <option value="">Выберите компанию:</option>
                    <?php foreach ($lastCompany as $company): ?>
                        <option  value="<?php echo $company['name'] ?>">
                            <p><?php echo $company['name'] ?></p>
                        </option>
                    <?php endforeach; ?>
                </select>
                
            </form>
        </div>
        <br>
    </div>

</section>
<span id="txtHint"></span>

<!-- <script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","/test.php?q="+str,true);
    xmlhttp.send();
  }
}
onchange="showUser(this.value)"
</script> -->



<?php include ROOT . '/views/layouts/footer.php'; ?>