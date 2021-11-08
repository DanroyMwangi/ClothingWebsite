<div class="main flex items-center h-screen w-full">
    <div class="login-form p-4 w-1/2 mx-auto">
        <h1 class="text-center text-3xl">
            Login Form
        </h1>
        <form action="" method="post" class="login-form">
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
            <div class="input p-4">
                <input type="text" name="loginUname" class="p-2 w-full rounded border-2 focus:outline-none"
                       placeholder="Email" title="Username" id="loginUname">
                <small class="text-red-700 hidden" id="unameError">
                    Invalid username.
                </small>
            </div>
            <div class="input p-4">
                <input type="password" name="loginPass" class="p-2 w-full border-2 rounded  focus:outline-none"
                       placeholder="Password" title="Password" id="loginPass">
                <small class="text-red-700 hidden" id="passError">
                    Invalid password.
                </small>
            </div>
            <div class="remember ml-2 p-2">
                <div>
                    <input type="checkbox" name="remember" id="remember">
                    <small class="">
                        Remember me.
                    </small>
                </div>
            </div>
            <div class="flex justify-center">
                <button class="w-11/12 bg-red-700 text-white p-2 m-2 rounded" type="button" name="loginBtn"
                        id="loginBtn">
                    Login
                </button>
            </div>
        </form>
        <span class="registerSwitch">
                <div class="flex justify-center">
                    <small class="text-blue-700 cursor-pointer">
                        Don't have an account?
                    </small>
                </div>
            </span>
    </div>
    <div class="register-form p-4 w-1/2 hidden mx-auto">
        <form action="" method="POST" class="reg-form" autocomplete="off">
            <div class="form-header">
                <h2 class="text-3xl text-center">
                    Register
                </h2>
                <p class="text-center">
                    Join your fellow Shoppers now, it only takes less than a minute.
                </p>
            </div>
            <div class="bg-red-200 text-red-800 p-4 rounded hidden fill-all-error-alert">
                    <span>
                        Fill in all the fields.
                    </span>
            </div>
            <div class="bg-red-200 text-red-800 p-4 rounded hidden error-alert">
                    <span>
                        Failed to register.
                    </span>
            </div>
            <div class="bg-green-200 text-green-800 p-4 rounded hidden success-alert">
                    <span>
                        Successfully registered.
                    </span>
            </div>
            <div class="form-input-area">
                <div class="flex flex-row justify-between w-full">
                    <input type="text" id="fname" name="fname"
                           class="w-1/2 p-2 m-2 border-2 border-gray-200 outline-none rounded" placeholder="First Name">
                    <input type="text" id="lname" name="lname"
                           class="w-1/2 p-2 m-2 mr-2 border-2 border-gray-200 outline-none rounded"
                           placeholder="Last Name">
                </div>
                <small class="text-red-700 hidden mx-2" id="nameError">
                    Invalid name.
                </small>
                <div class="flex flex-row w-full">
                    <input type="text" id="address" name="address"
                           class="w-full p-2 m-2 border-2 border-gray-200 outline-none rounded" placeholder="Address">
                </div>
                <small class="text-red-700 hidden mx-2" id="addressError">
                    Invalid Address.
                </small>
                <div class="flex flex-row justify-between w-full">
                    <input type="email" id="email" name="email"
                           class="w-full p-2 m-2 border-2 border-gray-200 outline-none rounded" placeholder="Email">
                </div>
                <small class="text-red-700 hidden mx-2" id="regEmailError">
                    Invalid Email.
                </small>
                <div class="reg-pass">
                    <div class="flex flex-row justify-between w-full">
                        <input type="password" id="password" name="regPass"
                               class="pass-input w-full p-2 m-2 border-2 border-gray-200 outline-none rounded"
                               placeholder="Password">
                    </div>
                    <div class="flex flex-row justify-between w-full">
                        <input type="password" id="re-password" name="rePass"
                               class="pass-input w-full p-2 m-2 border-2 border-gray-200 outline-none rounded"
                               placeholder="Re-enter Password">
                    </div>
                </div>
                <small class="text-red-700 hidden mx-2" id="regPassError">
                    Invalid Password.
                </small>
                <div class="flex flex-row justify-between w-full">
                    <select name="gender" id="gender" class="gender w-full p-2 m-2 border-2 rounded">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="rns">Rather not say</option>
                    </select>
                </div>
                <div class="reg-terms ml-2 p-2">
                    <div>
                        <input type="checkbox" name="terms" id="check-terms" onclick="activate()">
                        <small class="">
                            I accept the <span class="special terms">Terms of Use</span> and <span
                                    class="special policy">Privacy Policy</span>
                        </small>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button"
                            class="submit w-11/12 bg-red-400 text-white p-2 m-2 rounded transition cursor-not-allowed"
                            disabled name="regBtn" id="regBtn">
                        Sign Up
                    </button>
                </div>
            </div>
        </form>
        <span class="loginSwitch">
                <div class="flex justify-center">
                    <small class="text-blue-700 cursor-pointer">
                        Already have an account?
                    </small>
                </div>
                
            </span>
    </div>
</div>