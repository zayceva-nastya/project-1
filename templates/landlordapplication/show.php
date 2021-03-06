<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $usersList список пользователей
 * @var array $table
 * @var int $user_id
 */

echo Html::create("Pagination")
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();


echo Html::create('TableEdited')
    ->setControllerType($type)
    ->setHeaders($comments)
    ->data($table)
    ->setClass('table')
    ->html();


//$form = Html::create('Form')
//    ->setMethod('POST')
//    ->setAction("?action=add&type=$type")
//    ->setClass('form');
//
//
//foreach ($fields as $field) {
//    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
//    $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
//}
//
//$form->addContent(
//    Html::create('Input')
//        ->setType('submit')
//        ->setValue('OK')
//        ->html()
//);
//
//echo $form->html();


//print_r($usersList);
?>
<form action="?action=add&type=<?= $type ?>" method="post" class="guestbookform">
    <label> <?= $comments['caption'] ?>
        <input type="tel" name="caption">
    </label>
    <label> <?= $comments['content'] ?>
        <textarea name="content" cols="50" rows="10"></textarea>
    </label>
    <label> <?= $comments['image'] ?>
        <input type="file" name="image">
    </label>


    <input type="hidden" name="users_id" value="<?= $user_id ?>">


    <!--    <label> --><? //= $comments['users_id'] ?>
    <!--    --><? //=(new Select())->setName('users_id')->setId('users_id')->setData($usersList)->html()?>
    <!--    </label>-->
    <input type="submit" value="Отправить">
</form>
