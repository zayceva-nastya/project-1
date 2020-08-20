<?php
/** @var string $action */
?>

<div class="container">
    <form action="<?=$action?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Номер квартиры</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Номер телефона</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>