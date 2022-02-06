<html>

<head>
    <title>Project Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="w-full bg-red-600 p-8 ">
        <p class="text-center text-4xl	font-bold	text-white">Welcome to Project Manager</p>
    </div>


    <!-- <div class="w-4/12 bg-gray-800 p-5 rounded-lg mt-10 ml-20">
        <a href="/add_project">
            <p class="text-center text-2xl	text-white"> Add Project</p>

        </a>

    </div>
    <div class="w-4/12 bg-gray-800 p-5 rounded-lg mt-10 ml-20">
        <a href="/add_employee">
            <p class="text-center text-2xl	text-white">Add Employee</p>

        </a>

    </div>


    </div> -->

    <div class="flex justify-center">
        <div class="w-11/12 mt-10  p-10 rounded-lg">
            <div class="flex">
                <div class="flex-1">
                    <p class=" text-3xl"> Project Lists</p>
                </div>

                <div class="flex justify-end mt-1 mb-2">
                    <a href="/add_project" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Add Project
                    </a>
                    &nbsp;&nbsp;
                    <a href="/add_employee" class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Add Employee
                    </a>
                    &nbsp;&nbsp;
                    <a href="/list_employee" class="bg-purple-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                        Employee List
                    </a>
                </div>

            </div>
            <div class="h-0.5 w-full bg-gray-800" />

            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-200 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            S.N
                                        </th>

                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Project Name
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Cost
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Duration
                                        </th>
                                        <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach($data as $project)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$page}}
                                            @php
                                            $page++;
                                            @endphp
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$project->name}}
                                        </td>
                                        <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$project->cost}}
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{$project->duration}}
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <a href="/edit_project/{{$project->id}}" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>&nbsp;&nbsp;
                                            <a href="/delete_project/{{$project->id}}" class="text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-left mt-4 ">
                <span>
                    {{ $data->links()}}
                </span>

            </div>

        </div>
    </div>






</body>


</html>