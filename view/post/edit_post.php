
<h5 class="text-success"> Sửa bài viết</h5>
<form method="POST" >
    <p class="text-center text-success h5"> Thêm bài viết </p>
    <div class="form-group">
        <label>Nhập tiêu đề bài viết </label>
        <input class="form-control mb-3" name="title" type="text" value="<?php echo $dataID["post_title"]?>" required>
        <label>Nhập nội dung bài viết</label>
        <textarea class="form-control mb-3" id="post_content" name="post_content" value="<?php echo $dataIDPDetails['pdetail_content']?>" required ></textarea>
        <button class="form-control btn btn-primary mt-5" name="update_post" type="submit" >Update bài viết</button>
    </div>
</form>
