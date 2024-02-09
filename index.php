<?php
require 'functions.php';
$wadah = tampil("select * from event");
$wadah2 = tampil2("select * from event2");
if (isset($_POST['submit'])) {
    $kegiatan = htmlspecialchars($_POST['kegiatan']);
    $jam = htmlspecialchars($_POST['jam']);
    $insert = "insert into event values ('','$kegiatan','$jam')";
    $query = mysqli_query($conn, $insert);
    header("Location:index.php");
}


if (isset($_POST['tambah'])) {
    $kegiatan2 = htmlspecialchars($_POST['kegiatan2']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $insert = "insert into event2 values ('','$tanggal','$kegiatan2')";
    $query = mysqli_query($conn, $insert);
    header("Location:index.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BinnDiary</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="diary.png">
    <script src="https://kit.fontawesome.com/33886cee1c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav>
            <h2 class="judulNav">BinnDiary</h2>
            <div class="menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="link-nav">
                <a href="#calender">Kalender</a>
                <a href="#jadwal">Jadwal</a>
            </div>
        </nav>
        <div id="calender"></div>
        <div class="flex-calender">
            <div class="calender">
                <div class="calender-header">
                    <span class="tahun"></span>
                    <div class="container-prev-years">
                        <span class="prevLeft">
                            < </span>
                                <h2 class="bulan"></h2>
                                <span class="prevRight">></span>
                    </div>
                </div>
                <ul class="days">
                    <li>Minggu</li>
                    <li>Senin</li>
                    <li>Selasa</li>
                    <li>Rabu</li>
                    <li>Kamis</li>
                    <li>Jumat</li>
                    <li>Sabtu</li>
                </ul>

                <ul class="content-tanggal">
                    <li class="prevDate"></li>
                    <li class="prevDate"></li>
                    <li class="prevDate"></li>
                    <li class="prevDate"></li>
                    <li class="prevDate"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li class="today"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li class="nextDate"></li>
                    <li class="nextDate"></li>
                    <li class="nextDate"></li>
                    <li class="nextDate"></li>
                    <li class="nextDate"></li>
                    <li class="nextDate"></li>
                </ul>
            </div>



            <div class="event">
                <h2 class="judulEvent">Event</h2>
                <?php foreach ($wadah2 as $wdh2) : ?>
                    <div class="content-event" style=" margin-top: 3%;">
                        <span class="tanggal"><?= $wdh2['tanggal'] ?></span>
                        <div class="eventName"><?= $wdh2['content2'] ?>
                            <a href="hapus2.php?id=<?= $wdh2['id'] ?>" style="color: #12232D;margin-left: 15%;cursor: pointer;"><i class="fa-solid fa-trash fa-lg" id="remove"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <br>
                <div class="tambah-e" style=" margin-top: 3%;">TAMBAH</div>
                <br>
            </div>

        </div>
        <div id="jadwal"></div>
        <div class="content" id="jadwal">
            <h1>JADWAL</h1>
            <h3>BERIKUT ADALAH JADWAL KEGIATAN KEGIATAN SAYA YANG AKAN SAYA LAKUKAN PADA <span>HARI NORMAL</span></h3>
            <br>
            <div class="pembungkus-btn">
                <div class="tambah">TAMBAH</div>
                <div class="bersihkan">BERSIHKAN</div>
            </div>
            <div class="parent-c">
                <div class="column">
                    <?php foreach ($wadah as $wdh) : ?>
                        <div class="col1">
                            <div class="left">
                                <div class="judul">- <?= $wdh['content'] ?> </div>
                                <div class="bio"><?= $wdh['jam'] ?></div>
                            </div>
                            <a class="link-a" href="hapus.php?id=<?= $wdh['id'] ?>">
                                <div class="right">
                                    <i class="fa-solid fa-trash fa-lg" id="hapus2" style="color: #ffffff;cursor: pointer;"></i>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <br><br>

            <div class="container3">
                <div class="form">
                    <h3 class="edit2">TAMBAH JADWAL</h3>

                    <form action="" method="post">
                        <label for="kegiatan">KEGIATAN</label>
                        <br>
                        <input type="text" name="kegiatan" required autocomplete="off">
                        <br><br>
                        <label for="jam">ATUR JAM</label>
                        <br>
                        <input type="time" name="jam" required autocomplete="off">
                        <br><br><br>
                        <div class="c-btn">
                            <button class="submit2" type="submit" name="submit">TAMBAH</button>
                            <div class="batal2">BATAL</div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="container4">
                <div class="form">
                    <h3 class="edit3">TAMBAH EVENT</h3>

                    <form action="" method="post">
                        <label for="tanggal">TANGGAL</label>
                        <br>
                        <input type="date" name="tanggal" required autocomplete="off">
                        <br><br>
                        <label for="kegiatan2">KEGIATAN</label>
                        <br>
                        <input type="text" name="kegiatan2" required autocomplete="off">
                        <br><br><br>
                        <div class="c-btn">
                            <button class="submit3" type="submit" name="tambah">TAMBAH</button>
                            <div class="batal3">BATAL</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>