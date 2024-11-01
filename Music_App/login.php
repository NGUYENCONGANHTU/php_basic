    <?php
        session_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name'])&& !empty($_POST['password'])){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: index.php");
            exit();
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    </head>

    <body>
        <div class="flex h-lvh flex-col justify-center px-6 py-12 lg:px-8">
            <div class="bg-gray-300 w-96 mx-auto p-5 rounded-md">
                <div class="w-80 mx-auto ">
                    <img class="mx-auto h-10 w-auto"
                        src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                    <h2 class="mt-10 text-center text-3xl font-bold leading-9 tracking-tight text-gray-900">Login</h2>
                </div>

                <div class="mt-10 w-80 mx-auto ">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name:
                            </label>
                            <div class="mt-2">
                                <input id="name" name="name" type="text" autocomplete="name" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password"
                                    class="block text-sm font-medium leading-6 text-gray-900">Password:</label>
                                <div class="text-sm">
                                    <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                                        password?</a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                                in</button>
                        </div>
                    </form>

                    <p class="mt-10 text-center text-sm text-gray-500">
                        Not a member?
                        <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day
                            free
                            trial</a>
                    </p>
                </div>
            </div>
        </div>
        <div>
        </div>
    </body>

    </html>