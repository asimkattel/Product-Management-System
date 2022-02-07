<html>

<head>
    <title>
    Edit employee
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
                    <input value="{{$employee->ename}}" required type="text" name="ename" class="w-full p-2 mt-2 rounded-lg bg-gray-200">
                    @error("ename")
                    <div>
                   enter employee name
                    </div>

                    @enderror

                </div>
                <div>
                    <p class="mt-5">
                        enter employee address
                    </p>
                    <input value="{{$employee->address}}"  required type="text" name="address" class="w-full p-2 mt-2 rounded-lg bg-gray-200">
                    @error("address")
                    <div>
                      enter address
                    </div>

                    @enderror
                </div>
                <div>
                    <p class="mt-5">
                        enter employee salary
                    </p>
                    <input value="{{$employee->salary}}"  required type="number" name="salary" class="w-full p-2 mt-2 rounded-lg bg-gray-200">
                    @error("salary")
                    <div>
                        enter salary
                    </div>

                    @enderror
                </div>
                <div>
                    <button class="mt-5 w-full text center rounded-lg p-2 bg-gray-800"><a href="/list_employee"> Update</a></button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
