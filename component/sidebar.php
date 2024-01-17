<div class="sidebar" style="background: rgba( 255, 255, 255, 0.6 );
backdrop-filter: blur( 5px );
-webkit-backdrop-filter: blur( 4px );
"
>
    <div class="sidebar__top">
        <a class="sidebar__logo">
            <img class="sidebar__pic" src="img/logo6.svg" alt="" />
        </a>
        <button class="sidebar__burger"></button>
        <button class="sidebar__close" style="background:none;font-size:x-large;color:#aeb0c2">
            <i class="fal fa-times"></i>
        </button>
    </div>
    <div class="sidebar__wrapper">
        <div class="sidebar__inner">
            <div class="sidebar__group">
                <div class="sidebar__caption caption-sm">
                    เมนู<span>ต่างๆ</span>

                </div>
                <div class="sidebar__menu">

                        <a class="sidebar__item 
                        <?php
                        if ($_SERVER['PHP_SELF'] == "/beta_YRC_Council65/vote.php") {
                            echo "active";
                        } else {
                            echo "";
                        }
                        ?>
                        " href="vote.php">
                            <div style="font-size:22px;padding:0px 20px 0px 14px">
                                <i class="fas fa-vote-yea"></i>
                            </div>
                            <div class="sidebar__text">ลงคะแนนเสียง</div>
                        </a>

                </div>
            </div>
        </div>
    </div>
    <div class="sidebar__bottom">
        <a class="sidebar__item signout" href="./process/logout.php">
            <div style="font-size:22px;padding:0px 15px 0px 3px">
                <i class="fal fa-sign-out-alt"></i>
            </div>
            <div class="sidebar__text ">ออกจากระบบ</div>
        </a>
    </div>
</div>