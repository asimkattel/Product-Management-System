<html>

<head>
    <title>
        Add employee
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form method="POST">
        @csrf
        <div class="flex justify-center">
            <div class="w-4/12 rounded-lg p-8 mt-20 bg-gray-400">
                <div>
                    <p>
                        enter employee name
                    </p>
                    <input required type="text" name="ename" class="w-full p-2 mt-2 rounded-lg bg-gray-200">
                    @error("ename")
                    <div>
                    {{$message}}
                    </div>

                    @enderror

                </div>
                <div>
                    <p class="mt-5">
                        enter employee address
                    </p>
                    <input required type="text" name="address" class="w-full p-2 mt-2 rounded-lg bg-gray-200">
                    @error("address")
                    <div>
                       {{$message}}
                    </div>

                    @enderror
                </div>
                <div>
                    <p class="mt-5">
                        enter employee salary
                    </p>
                    <input required type="number" name="salary" class="w-full p-2 mt-2 rounded-lg bg-gray-200">
                    @error("salary")
                    <div>
                     {{$message}}
                    </div>

                    @enderror
                </div>
                <div>
                    <button class="mt-5 w-full text center rounded-lg p-2 bg-green-800"> Register</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
