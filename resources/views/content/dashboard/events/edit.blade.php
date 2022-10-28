@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="relative flex items-center min-h-screen justify-center overflow-hidden" style="margin-top: -120px;">
        <form action="/admin/events/update/{{$event->id}}" method="POST" class="shadow p-12" enctype="multipart/form-data">
            @csrf
            <h1>Modifier Evennement !</h1>
            <hr>
            <br>

            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-dark-900 dark:text-gray-300">Title</label>
                    <input type="text" id="title" name="title" value="{{$event->title}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="title" required>
                </div>

                <div>
                    <label for="start_date" class="block mb-2 text-sm font-medium text-dark-900 dark:text-gray-300">Start Time</label>
                    <input type="date" id="start_date" value="{{$event->date}}" name="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="start_date" required>
                </div>
                
                <div>
                    <label for="end_date" class="block mb-2 text-sm font-medium text-dark-900 dark:text-gray-300">End Time</label>
                    <input type="date" id="end_date" name="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="end_date" required>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-dark-900 dark:text-gray-300">Phone Number</label>
                    <input type="number" id="phone" value="{{$event->phone}}" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Phone Number" required>
                </div>
                <div>
                    <label for="adresse" class="block mb-2 text-sm font-medium text-dark-900 dark:text-gray-300">Adresse</label>
                    <input type="text" id="adresse" name="adresse" value="{{$event->adresse}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="adresse" required>
                </div>
                <br>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                    <input type="text" id="description" value="{{$event->description}}" name="description" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <br>


                <label class="block mb-4">
                    <span class="sr-only">Choose Event Image</span>
                    <input type="file" value="{{$event}}" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />

                    @error('image')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </label>
                <br>
                <button type="submit" class="px-4 py-2 text-sm text-white bg-indigo-600 rounded">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
@endsection