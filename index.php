<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-gray-300">
    <div class="flex justify-center items-center h-screen space-x-8">
        <!-- Sign Up Form -->
        <div class="flex flex-col">
            <div class="flex justify-center bg-cyan-600 text-white p-3 rounded-lg font-bold text-2xl">
                <p>Sign Up Form</p>
            </div>
            <div class="bg-white w-96 p-4 shadow-md hover:shadow-2xl rounded-md">
                <form action="Includes/signup.inc.php" method="POST">
                    <label class="font-serif text-md mb-1" for="name">Name: </label>
                    <input name="name" id="name" type="text" class="w-full bg-gray-100 text-gray-700 p-1 focus:outline-none focus:ring focus:ring-cyan-700 mb-2">

                    <label class="font-serif text-md mb-1" for="email">Email: </label>
                    <input name="email" id="email" type="email" class="w-full bg-gray-100 text-gray-700 p-1 focus:outline-none focus:ring focus:ring-cyan-700 mb-2">

                    <label class="font-serif text-md mb-1" for="password">Password: </label>
                    <input name="password" id="password" type="password" class="w-full bg-gray-100 text-gray-700 p-1 focus:outline-none focus:ring focus:ring-cyan-700 mb-2">

                    <label class="font-serif text-md mb-1" for="password-confirmation">Confirm Password: </label>
                    <input name="password_confirmation" id="password-confirmation" type="password" class="w-full bg-gray-100 text-gray-700 p-1 focus:outline-none focus:ring focus:ring-cyan-700 mb-2">

                    <button name="signup" class="font-bold w-full bg-cyan-600 hover:bg-cyan-700 text-white rounded p-3">Signup</button>
                </form>
            </div>
        </div>
        
        <!-- Log In Form -->
        <div class="flex flex-col">
            <div class="flex justify-center bg-fuchsia-600 text-white p-3 rounded-lg font-bold text-2xl">
                <p>Log In Form</p>
            </div>
            <div class="bg-white w-96 p-4 shadow-md hover:shadow-2xl rounded-md">
                <form action="Includes/login.inc.php" method="POST">

                    <label class="font-serif text-md mb-1" for="email">Email: </label>
                    <input name="email" id="email" type="email" class="w-full bg-gray-100 text-gray-700 p-1 focus:outline-none focus:ring focus:ring-fuchsia-700 mb-2">

                    <label class="font-serif text-md mb-1" for="password">Password: </label>
                    <input name="password" id="password" type="password" class="w-full bg-gray-100 text-gray-700 p-1 focus:outline-none focus:ring focus:ring-fuchsia-700 mb-2">

                    <button name="login" class="font-bold w-full bg-fuchsia-600 hover:bg-fuchsia-700 text-white rounded p-3">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>