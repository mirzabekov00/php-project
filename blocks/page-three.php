<?php 
session_start();

include "header.php";?>


<div class="container">
    <div class="d-flex">
        <div style="height: 70vh;" class="col-3 p-2">
            <button id="page-one" href="pageone" class="btn btn-outline-primary btn-block mt-2 settingsButton">Сменить пароль</button>
            <button id="page-two" class="btn btn-outline-primary btn-block mt-2 settingsButton ">Сменить один</button>
            <button id="page-three" class="btn btn-outline-primary btn-block mt-2  settingsButton active">Сменить два</button>
            <button id="page-four" class="btn btn-outline-primary btn-block mt-2 settingsButton">Сменить три</button>
        </div>
        <div class="col-9 p-2">
        <div <?php if (!isset($_SESSION['user'])) {
                                echo "NotSession";
                            } ?>" class="shadow p-4 bg-white rounded d-block mt-2">
<div id="third-content">
                    <form method="post">
                    <div class="form-group">
                        <label>ТРЕТЬЯ ФОРМА</label>
                        <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                    </div>
                    <div class="form-group">
                        <label>ТРЕТЬЯ ФОРМА</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword">
                    </div>
                    <div class="form-group">
                        <label>ТРЕТЬЯ ФОРМА</label>
                        <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword">
                    </div>

                    <div class="text-right">

                        <button id="changePassword" name=changePassword class="bg-primary text-center btn text-white">
                            Подтвердить
                        </button>
                    </div>

        </script>
        </form>
</div>

</div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    let btn = document.querySelectorAll('.settingsButton')

    for (let i in btn) {
        btn[i].onclick = () => {
            btn.forEach(a => {
                a.classList.remove('active')
            })
            btn[i].classList.add('active')
        }
    }

    $("#page-one").click(function(e) {
        e.preventDefault();
        history.pushState('data', 'Изменение аватарки', 'http://php-project/blocks/profileSettings.php');
        $("#third-content").load("profileSettings.php #content");
    });
    $("#page-two").click(function(e) {
        e.preventDefault();
        history.pushState('data', 'Изменение аватарки', 'http://php-project/blocks/page-second.php');
        $("#third-content").load("page-second.php #second-content");

    });

    $("#page-three").click(function(e) {
        e.preventDefault();
        history.pushState('data', 'Изменение аватарки', 'http://php-project/blocks/page-three.php');
        $("#third-content").load("page-three.php #third-content");
    });
    $("#page-four").click(function(e) {
        e.preventDefault();
        history.pushState('data', 'Изменение аватарки', 'http://php-project/blocks/page-four.php');
        $("#third-content").load("page-four.php #four-content");
    });
</script>
</script>