<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="flex flex-col items-center justify-center h-screen dark">
    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-gray-200 mb-4">Sign Up</h2>
        <form action="<?= base_url('/user/register') ?>" method="post" class="flex flex-col">
            <div class="flex space-x-4 mb-4">
                <input
                    placeholder="First Name"
                    name="first_name"
                    class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-1/2 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    type="text"
                />
                <input
                    placeholder="Last Name"
                    name="last_name"
                    class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-1/2 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                    type="text"
                />
            </div>
            <input
                placeholder="Email"
                name="email"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="email"
            />
            <input
                placeholder="Confirm Email"
                name="confirm_email"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="email"
            />
            <input
                placeholder="Password"
                name="password"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="password"
            />
            <input
                placeholder="Confirm Password"
                name="confirm_password"
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                type="password"
            />
            <label class="text-sm mb-2 text-gray-200 cursor-pointer" for="gender">
                Gender
            </label>
            <select
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
                id="gender"
                name="gender"
            >
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <label class="text-sm mb-2 text-gray-200 cursor-pointer" for="age">
                Age
            </label>
            <input
                class="bg-gray-700 text-gray-200 border-0 rounded-md p-2"
                id="age"
                name="age"
                type="date"
            />
            <p class="text-white mt-4"> 
                Already have an account?
                <a class="text-sm text-blue-500 hover:underline mt-4" href="<?= base_url('usercontroller') ?>"
                  >Login</a
                >
            </p>
            <button
                class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150"
                type="submit"
            >
                Sign Up
            </button>
        </form>
    </div>
</body>
</html>
