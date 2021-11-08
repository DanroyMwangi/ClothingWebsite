<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/style.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("/assets/css/tailwind.css"); ?>">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="flex justify-center items-center align-center w-1/2 m-auto h-screen block">
        <h1 class="text-6xl">
            Welcome to the Administrator Login Panel
        </h1>
        <form action="" class="admin-login-form p-4 w-full">
            <div class="bg-green-200 text-green-800 p-4 rounded hidden login-success-alert">
                <span>
                    Successfully Logged in.
                </span>
            </div>
            <div class="bg-red-200 text-red-800 p-4 rounded hidden login-error-alert">
                <span>
                    Error encountered, contact admin.
                </span>
            </div>
            <div class="input p-4 w-full">
                <input type="text" name="adminLoginEmail" class="p-2 w-full rounded border-2 focus:outline-none"
                       placeholder="Email" title="Username" id="adminLoginEmail">
                <small class="text-red-700 hidden" id="adminEmailError">
                    Invalid username.
                </small>
            </div>
            <div class="input p-4">
                <input type="password" name="adminLoginPass" class="p-2 w-full border-2 rounded focus:outline-none"
                       placeholder="Password" title="Password" id="adminLoginPass">
                <small class="text-red-700 hidden" id="adminPassError">
                    Invalid password.
                </small>
            </div>
            <div class="flex justify-center">
                <button class="w-11/12 bg-red-700 text-white p-2 m-2 rounded inline-flex justify-center" type="button"
                        name="adminLoginBtn"
                        id="adminLoginBtn">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white hidden admin-login-load-spinner"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                style="--darkreader-inline-stroke: currentColor;"
                                data-darkreader-inline-stroke=""></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                              style="--darkreader-inline-fill: currentColor;" data-darkreader-inline-fill=""></path>
                    </svg>
                    <span class="admin-login-btn-text">
                    Login
                </span>
                </button>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="<?php echo base_url("/assets/scripts/helpers.js"); ?>"></script>
<script src="<?php echo base_url("/assets/scripts/main.js"); ?>"></script>
<script src="<?php echo base_url("/assets/scripts/admin.js"); ?>"></script>
</html>