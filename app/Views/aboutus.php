    <nav class="w-full z-10">
        <div class="nav-container px-8 py-2 flex flex-row items-center justify-between bg-black text-white">
            <div class="nav-brand m-1">
                <a href="index.php" class="text-3xl font-bold">The Attire <sup class="text-sm"><small>TM</small></sup></a>
            </div>
            <div class="nav-link nav-link-men">
                <a href="men.php" class="text-lg font-semibold">Men</a>
            </div>
            <div class="nav-link nav-link-women">
                <a href="women.php" class="text-lg font-semibold">Women</a>
            </div>
            <div class="nav-link nav-link-children">
                <a href="children.php" class="text-lg font-semibold">Children</a>
            </div>
            <div class="nav-link nav-link-pets">
                <a href="pets.php" class="text-lg font-semibold">Pets</a>
            </div>
            <div class="nav-link">
                <a href="aboutUs.php" class="text-lg font-semibold">About Us</a>
            </div>
            <?php if(!isset($_SESSION['userId'])) : ?>
                <div class="nav-link">
                    <a href="login.php" class="text-lg font-semibold">Login</a>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['userId'])) : ?>
                <div class="nav-link">
                    <span class="italic">
                        <?php echo $_SESSION['uname'];?>
                    </span>
                </div>
            <?php endif; ?>
        </div>
    </nav>
    <div class="main relative flex items-center p-6">
        <div class="h-screen w-full m-auto">
            <h1 class="text-center text-4xl">
                About The Attire
            </h1>
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nesciunt commodi sint culpa sed labore vel nam, a animi unde minima odio maxime architecto facilis consequuntur doloribus distinctio ipsa? Laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus veniam aliquam expedita vero iusto sequi tempore alias fuga at dicta velit, explicabo quaerat, animi porro, repellendus ex vel. Reprehenderit, neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur possimus numquam officiis, id rem vero dolorem repellat aliquam, quasi mollitia iusto deleniti libero laudantium amet et consequuntur, molestias error placeat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam quibusdam doloribus delectus vitae. Minima deleniti non assumenda, vel quibusdam voluptas adipisci commodi corporis ipsam consectetur! Pariatur nam reiciendis suscipit!
            </p>
        </div>
    </div>