<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?> Web Programming</title>
    <link rel="stylesheet" href=<?php echo base_url() ?>assets/css/style.css" type="text/css">
</head>
<body>
    <h1>Coba Dulu</h1>
</body>
    <div> id "wrapper">
        <header>
            <hgroup>
                <h1>Web BSI</h1>
                <h3>Info Seputar Kampus</h3>
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/web/user' ?>">User</a></li>
                    </ul>
                </nav>
                <div>class="clear"></div>
            </hgroup>
        </header>
        <section>
            <h1> <?php echo $judul ?></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquid eaque rerum maiores ea? Dolorem quisquam doloremque provident non distinctio impedit consequatur veritatis error soluta.
            </p>
        </section>
    </div>
</html>