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
    <div class="main relative">
        <div class="below-fold mx-28 py-6">
            <div class="new flex-col flex">
                <div class="new-heading">
                    <h1 class="text-6xl text-center">
                        Casual
                    </h1>
                </div>
                <div class="new-body p-4 flex flex-row flex-wrap">
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new flex-col flex">
                <div class="new-heading">
                    <h1 class="text-6xl text-center">
                        Sports
                    </h1>
                </div>
                <div class="new-body p-4 flex flex-row flex-wrap">
                    <div class="card w-96 flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/heels.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Women's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        They'll help you heel.
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/heels.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Women's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        They'll help you heel.
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/heels.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Women's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        They'll help you heel.
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/heels.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Women's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        They'll help you heel.
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/heels.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Women's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        They'll help you heel.
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/heels.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Women's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        They'll help you heel.
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new flex-col flex">
                <div class="new-heading">
                    <h1 class="text-6xl text-center">
                        Casual
                    </h1>
                </div>
                <div class="new-body p-4 flex flex-row flex-wrap">
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-96 bg-black text-white flex flex-col m-4">
                        <div class="card-image w-full">
                            <img src="media/images/shoe.jpg" class="w-full" alt="">
                        </div>
                        <div class="card-body mt-1 p-2">
                            <div class="card-body-heading">
                                <h1 class="text-2xl text-center">
                                    Men's Shoes
                                </h1>
                            </div>
                            <div class="card-body-footer flex flex-col">
                                <div>
                                    <span>
                                        The Coolest Sneaker
                                    </span>
                                </div>
                                <div class="buy-btn flex items-center text-center w-full">
                                    <button class="bg-green-600 text-white w-5/6 my-2 mx-auto p-2 rounded text-2xl">
                                        Buy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>