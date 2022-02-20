<html>

<head>
    <title>
        Edit Task
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
                    <p class=" text-center">
                        Employee name
                    </p>
                    
                    <select  name="eid" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 ">
                    
                    
                        @foreach($data as $ename)
                        
                        <option value="{{$ename->id}}" {{$ename->id ==$task->employee_id ? 'selected' :''}}>{{$ename->ename}}

                        </option>
                        @endforeach

                    </select>

                    @error("eid")
                    <div>
                    {{$message}}
                    </div>

                    @enderror
                </div>
                <div>
                    <p class=" text-center mt-4" > Project name</p>
                    <select name="pid" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 ">
                    
                    @foreach($projects as $project)
                    <option value="{{$project->id}}"{{$project->id ==$task->project_id ? 'selected' :''}}>{{$project->name}}

                    </option>
                    @endforeach

                </select>

                   
                    @error("cost")
                    <div>
                        {{$message}}
                    </div>

                    @enderror


                </div>
                <div>
                    <p class=" text-center mt-4"> Start date
                    </p> <input  value="{{$task->date}}" type="date" name="date" class="bg-gray-100 border-1 w-full p-2 rounded-lg mt-2 " placeholder="Enter the duration of Project ">
                    @error("duration")
                    <div>
                        {{$message}}
                    </div>

                    @enderror
                </div>
                <div>
                    <button class="bg-blue-600 border-1 w-full p-2 rounded-lg mt-4">Update</button>
                </div>
            </div>
        </div>

    </form>



</body>

</html>