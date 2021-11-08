<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/style.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/tailwind.css"); ?>">
    <title><?php echo $title ?></title>
</head>
<body>
<nav class="absolute w-full z-10">
    <div class="nav-container px-8 py-2 flex flex-row items-center justify-between bg-black text-white">
        <div class="nav-brand m-1">
            <a href="/" class="text-3xl font-bold">The Cobbler <sup class="text-sm"><small>TM</small></sup></a>
        </div>
        <div class="nav-link nav-link-men">
            <a href="/Sneakers" class="text-lg font-semibold">Sneakers</a>
        </div>
        <div class="nav-link nav-link-women">
            <a href="/Tshirts" class="text-lg font-semibold">T-shirts</a>
        </div>
        <div class="nav-link nav-link-children">
            <a href="/Art" class="text-lg font-semibold">Art</a>
        </div>
        <div class="nav-link nav-link-pets">
            <a href="/Custom" class="text-lg font-semibold">Customize</a>
        </div>
        <div class="nav-link">
            <a href="/AboutUs" class="text-lg font-semibold">About Us</a>
        </div>
        <?php if (!session()->get('isLoggedIn')) : ?>
            <div class="nav-link">
                <a href="/auth" class="text-lg font-semibold">Login</a>
            </div>
        <?php endif; ?>
        <?php if (session()->get('isLoggedIn')) : ?>
            <div class="nav-link">
                    <span class="italic">
                        <?php echo session()->get("fname"); ?>
                    </span>
            </div>
        <?php endif; ?>
    </div>
</nav>