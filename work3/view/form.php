<?php 
namespace view;
?>

<?php function form($fromEdit, $editedPost) {
$title = $fromEdit? "編集ページ":"新規投稿";
$subimitName = $fromEdit? "update":"create";
$subimitValue = $fromEdit? "更新":"投稿";
$existName = $editedPost['name']?? "";
$existContent = $editedPost['content']?? "";
$existId = $editedPost['id']?? "";
?>
<section class="form">
    <h2><?php echo $title ?></h2>
    <?php //formからの入力をcontroller.phpで受けて条件分岐。そしてdbの操作 ?> 
    <form action="controller.php" method="POST" style="display:inline;">
        <input type="hidden" name="id" value='<?php echo $existId; ?>'>
        <div>
            <label for="name">name:</label>
            <input type="text" name="name" id="name" value="<?php echo $existName; ?>">
        </div>
        <div>
            <label for="postContent" style="display:block;">投稿:</label>
            <textarea name="postContent" id="postContent" cols="30" rows="10"><?php echo $existContent; ?></textarea>
        </div>
        <input type="submit" name="<?php echo $subimitName; ?>" value="<?php echo $subimitValue; ?>">
    </form>
    <?php if($fromEdit): ?>
        <a href="index.php"><button>戻る</button></a>
    <?php endif; ?>
</section>
<?php } ?>