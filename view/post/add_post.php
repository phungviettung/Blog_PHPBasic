
<?php
//	ini_set('display_errors', 1);
//	ini_set('display_startup_errors', 1);
//	error_reporting(E_ALL);
	//print_r($_SESSION);
?>


<!--                <h2><i class="halflings-icon edit"></i><span class="break" ></span>Đăng Bài </h2>-->
<!--                <div class="box-content">-->
<!--                    <form class="form-horizontal" method="POST"  enctype = "multipart/form-data" name="form_addPost" id="form_addPost">-->
<!--                        <fieldset>-->
<!--                            <div class="control-group">-->
<!--                                <label class="control-label" for="typeahead"> Tiêu đề bài viết </label>-->
<!--                                <div class="controls">-->
<!--                                    <input id="title" name="title" type="text" class="span6 typeahead" id="typeahead" placeholder="Nhập tiêu đề ..." required>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="control-group hidden-phone">-->
<!--                                <label class="control-label" for="textarea2" >Nội dung bài viết</label>-->
<!--                                <div class="controls">-->
<!--                                    <textarea id="post_content" name="post_content" rows="7" cols="150" placeholder="Nhập nội dung ...." required></textarea>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="control-group">-->
<!--                                <label class="control-label" for="fileInput">Tải file ảnh chủ đề cho bài viết </label>-->
<!--                                <div class="controls">-->
<!--                                    <input  name = "image" class="form-control" id="fileInput" type="file" required>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-actions">-->
<!--                                <button name="add_post" type="submit" class="btn btn-primary">Đăng bài</button>-->
<!--                            </div>-->
<!--                        </fieldset>-->
<!--                    </form>-->

                    <form method="post" enctype = "multipart/form-data" onSubmit="return validate();">
                        <p class="text-center text-success h5"> Thêm bài viết </p>
                        <div class="form-group">
                            <label>Nhập tiêu đề bài viết </label>
                            <input class="form-control mb-3" name="title" type="text" required>
                            <label>Nhập nội dung bài viết</label>
                            <textarea class="form-control mb-3" id="post_content" name="post_content" required></textarea>
                            <label class="mt-3"> Tải file ảnh chủ đề cho bài viết</label>
<!--                            <input  class="custom-file-input" id="customFile"" name="image" type="file" required>-->
                            <div class="custom-file mb-3">
                                <input name = "image" type="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Chọn file ảnh</label>
                            </div>
                            <button  class="form-control btn btn-primary mt-5" name="add_post" type="submit">Đăng bài</button>
                        </div>
                    </form>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>


<?php
    if (isset($thanhcong) && in_array('add_success', $thanhcong) && isset($flag) && $flag == true){
        echo "<p style = 'color : green'> Đăng bài thành công</p>";
    }

?>
<?php
if (isset($flag) && $flag == true) {
    ?>
    <img src="<?php echo $target_file; ?>">
    <?php
}
else { ?>
    <p style = "color: red"> <?php if (isset($error)) echo $error['image'];?></p>

<?php
}
?>
