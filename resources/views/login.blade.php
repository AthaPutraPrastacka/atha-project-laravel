<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-sky-600">
    <form id="loginForm" class="bg-white p-6 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" name="username" id="username" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring focus:ring-blue-500" required>
        </div>
        <a href="{{ route('home') }}"><button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded hover:bg-blue-600 transition duration-200">LOGIN</button></a>
    </form>

    <script src="assets/js/script.js"></script>
</body>
</html>