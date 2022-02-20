<html>

<head>
    <title>
        Edit Project
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
@include("nav")


    <form method="POST">
        @csrf
        <div class="flex justify-center">
            <div class="w-4/12 mt-20 bg-gray-200 p-10 rounded-lg">
                <div>
                    <p class="text-center"> Project name
                    </p> <input required value="{{$project->name}}" type="string" name="name" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 " placeholder="enter the name of project">
                    @error("name")
                    <div>
                        enter name
                    </div>

                    @enderror
                </div>
                <div>
                    <p  class="text-center mt-4"> Project cost in Rs.
                    </p> <input  required value="{{$project->cost}}" type="number" name="cost" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 " placeholder="enter the cost of project">
                    @error("cost")
                    <div>
                        {{$message}}
                    </div>

                    @enderror


                </div>
                <div>
                    <p  class="text-center mt-4"> Project duration in days
                    </p> <input  required value="{{$project->duration}}" type="string" name="duration" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 "  placeholder="enter the duration of project">
                    @error("duration")
                    <div>
                        enter duration
                    </div>

                    @enderror
                </div>
                <div>
                    <button class="bg-gray-800 border-1 w-full p-2 rounded-lg mt-4 text-white">Update</button>
                </div>
            </div>
        </div>
    </form>



</body>

</html>