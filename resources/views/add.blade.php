<html>

<head>
    <title>
        Add Project
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form method="POST">
        @csrf
        <div class="flex justify-center">
            <div class="w-4/12 mt-20 bg-gray-200 p-10 rounded-lg">
                <div>
                    <p class=" text-center">
                        Project name
                    </p>
                    <input required type="string" name="name" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 " placeholder="Enter Project name">

                    @error("name")
                    <div>
                    {{$message}}
                    </div>

                    @enderror
                </div>
                <div>
                    <p class=" text-center mt-4"> Project cost in Rs.
                    </p> <input required type="number" name="cost" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 " placeholder="Enter the cost of Project">
                    @error("cost")
                    <div>
                        {{$message}}
                    </div>

                    @enderror


                </div>
                <div>
                    <p class=" text-center mt-4"> Project duration in days
                    </p> <input required  type="number" name="duration" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 " placeholder="Enter the duration of Project ">
                    @error("duration")
                    <div>
                        {{$message}}
                    </div>

                    @enderror
                </div>
                <div>
                    <button class="bg-green-600 border-1 w-full p-2 rounded-lg mt-4">Create</button>
                </div>
            </div>
        </div>

    </form>



</body>

</html>