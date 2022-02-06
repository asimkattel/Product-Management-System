<html>

<head>
    <title>Project Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="w-full bg-red-600 p-8 ">
        <p class="text-center text-4xl	font-bold	text-white">Welcome to Project Manager</p>
    </div>
    </div>
    <div class="flex justify-center">
        <div class="w-4/12 bg-gray-800 p-5 rounded-lg mt-10">
            <a href="/add_project">
                <p class="text-center text-2xl	text-white"> Add Project</p>
            </a>

        </div>
    </div>
    <div class="flex justify-center">
        <div class="w-11/12 mt-10 bg-gray-200 p-10 rounded-lg">
            <div>
                <p class=" text-3xl"> Projects Lists</p>
            </div>
            <div class="h-0.5 w-full bg-gray-800">

            </div>

            <table class="mt-8 ">
                <thead>
                    <tr>
                        <th class="border-collapse border border-gray-800 bg-gray-700 p-5 text-white">SN</th>
                        <th class="border-collapse border border-gray-800  bg-gray-700 p-5 text-white">Project Name</th>
                        <th class="border-collapse border border-gray-800 bg-gray-700 p-5 text-white">Duration<br>(in days)</th>
                        <th class="border-collapse border border-gray-800 bg-gray-700 p-5 text-white">Cost<br>(in Rs.)</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $x=1;
                    @endphp

                    @foreach($data as $project)
                    <tr>
                        <td class=" text-center border border-gray-800">{{$x}}</td>
                        <td class="text-center border border-gray-800 "> {{$project->name}}</td>
                        <td class=" text-center border border-gray-800"> {{$project->duration}}</td>
                        <td class=" text-center border border-gray-800"> {{$project->cost}}</td>
                        <td><a href="/edit_project/{{$project->id}}"><button class="w-0.5/12 bg-blue-600 border-1 p-1 rounded-lg mt-4 ml-3 text-center">edit</button></a></td>
                        <td> <a href="/delete_project/{{$project->id}}"><button class="w-0.5/12 bg-red-600 border-1 p-1 rounded-lg mt-4 ml-3">delete</button></a></td>
                    </tr>
                    @php
                    $x++;
                    @endphp
                    @endforeach

                </tbody>
            </table>
            <div class="flex justify-left mt-4 ">
            <span >
                {{ $data->links()}}
            </span>
            
            </div>

        </div>
    </div>




    

</body>


</html>