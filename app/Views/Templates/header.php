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
            <div class="relative w-40">
                <div class="nav-link inline-flex items-center select-none relative">
                    <div class="nav-user inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 m-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span>
                            <?php echo session()->get("fname"); ?>
                        </span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 m-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                        <span class="absolute rounded bg-black text-white" style="top: -2px;right: 2px;padding: .5px">
                            0
                        </span>
                    </div>
                </div>
                <div class="w-full bg-white absolute p-2 text-black">
                    <a href="">Account</a>
                    <hr>
                    <a href="/auth/Logout">Logout</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</nav>