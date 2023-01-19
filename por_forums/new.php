<?php include_once ("head.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-5 col-6">
            <h1>สร้างกระทู้ใหม่</h1>
            <form action="create.php" metthod="POST">
                <div>
                    <label for="title" class="form-label">หัวข้อกระทู้</label>
                    <input type="text" name="title" class="form-control" placeholder="ใส่หัวข้อกระทู้ที่นี่">
                </div>
                <div class="mt-3">
                    <label for="content" class="form-label">เนื้อหากระทู้</label>
                    <textarea name="content" class="summernote" cols="30" rows="10"></textarea>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-lg btn-primary w-100">ยืนยันการสร้างกระทู้</button>
                </div>
            </form>
            </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 300
        });
    });
</script>
<?php include_once ("foot.php"); ?>