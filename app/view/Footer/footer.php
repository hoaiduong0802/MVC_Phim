<style>
    footer {
        display: flex;
        flex-direction: column;

        p {
            margin: unset;
        }

        section {
            margin: unset;
        }
    }

    .footer {
        .footer__icon {
            display: flex;
            align-items: center;
            column-gap: 16px;
            width: 40px;
            height: 40px;
            margin-bottom: 16px;

            >div {
                font-size: 40px;
            }
        }

        .footer__information {
            display: flex;
            align-items: center;
            justify-content: space-between;

            .footer__information-block1,
            .footer__information-block2,
            .footer__information-block3,
            .footer__information-block4 {
                display: flex;
                justify-content: flex-start;
                flex-direction: column;
                row-gap: 8px;

                a {
                    display: inline-flex;
                    text-decoration: none;
                    color: gray;
                    transition: 0.3s;

                    &:hover {
                        color: white;
                        transition: 0.3s;
                    }
                }
            }
        }

        .footer__licence {
            margin: 16px 0px;

            a {
                display: flex;
                justify-content: flex-start;
                text-decoration: none;
                border: 1px solid gray;
                padding: 8px 16px;
                color: gray;
                width: max-content;
                transition: 0.3s;

                &:hover {
                    color: white;
                    transition: 0.3s;
                }
            }
        }
    }
</style>
<footer>
    <section class="footer">
        <div class="container">
            <div class="footer__icon">
                <div class="footer__icon-facebook">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="footer__icon-inst">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="footer__icon-tw">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="footer__icon-youtube">
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
            <div class="footer__information">
                <div class="footer__information-block1">
                    <a href="#">Mô tả âm thanh</a>
                    <a href="#">Quan hệ với nhà đầu tư</a>
                    <a href="#">Thông báo pháp lý</a>
                </div>
                <div class="footer__information-block2">
                    <a href="#">Trung tâm trợ giúp</a>
                    <a href="#">Việc làm</a>
                    <a href="#">Tùy chọn cookie</a>
                </div>
                <div class="footer__information-block3">
                    <a href="#">Thẻ quà tặng</a>
                    <a href="#">Điều khoản sử dụng</a>
                    <a href="#">Thông tin doanh nghiệp</a>
                </div>
                <div class="footer__information-block4">
                    <a href="#">Trung tâm đa phương tiện</a>
                    <a href="#">Quyền riêng tư</a>
                    <a href="#">Liên hệ với chúng tôi</a>
                </div>
            </div>
            <div class="footer__licence">
                <a href="#">Mã dịch vụ</a>
            </div>
        </div>
    </section>
    <p>&copy; 2024 BHZCo. All rights reserved.</p>
</footer>
<script src="public/constants/message.js"></script>
<script src="public/constants/regex.js"></script>
<script src="public/constants/validate.js"></script>
<script src="public/js/boostrap-bundle/bootstrap.bundle.min.js"></script>
<script src="public/js/fontawesome-bundle/js/all.min.js"></script>
<script src="public/js/swiper-bundle/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="public/js/script.js"></script>
</body>

</html>