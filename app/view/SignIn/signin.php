<section class="sec_login" style="padding-top: 24px;">
    <div class="container">
        <div class="title">
            <h2>Đăng nhập</h2>
        </div>
        <div class="form_login">
            <div class="bside col-md-8">
                <form method="post" action="index.php?page=login">
                    <div class="user-name">
                        <span>Tên Đăng Nhập:</span>
                        <input type="text" name="id" <?php if (!empty($error_message))
                            echo 'placeholder="' . $error_message . '"'; ?>><br>
                    </div>
                    <div class="pass-word">
                        <span>Password: </span>
                        <input type="password" name="password" <?php if (!empty($error_message))
                            echo 'placeholder="' . $error_message . '"'; ?>><br>
                        <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>