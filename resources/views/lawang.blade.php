<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>

    <div class="mx-auto flex pt-12 pb-16 items-center lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
          <!-- Left Column -->
          <div
            class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
            <h1 class="title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight">
              Kontrol Servo Ruangan 11.2
            </h1>
            @if (\Session::has('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">{!! \Session::get('success') !!}</span>
                </div>
            @endif

            @if (\Session::has('error'))
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">{!! \Session::get('error') !!}</span>
                </div>
            @endif

            <form action="{{ route('servo-control') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col text-right">
                    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">
                        Save now
                    </button>
                </div>
            </form>
          </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>