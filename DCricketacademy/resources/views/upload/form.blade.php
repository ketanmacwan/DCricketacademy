<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Joy's Demo Site </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->


{{-- Upload Section  --}}
    <section class="trainer_section layout_padding">
    <div class="container">

        <a href="javascript:history.back()" class="back-button">Go Back</a>

    {{-- <div class="relative pt-16 flex content-center items-center justify-center" style="min-height: 75vh;"> --}}
    <form class="w-full max-w-lg pt-10 pb-5" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="block w-full text-grey-darkest mb-5 text-3xl">
            <h3>File Upload Form</h3>
        </div>
        <div class="block w-full text-grey-darkest mb-5 text-1xl text-center">
        @if ($message = Session::get('success'))
         <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
            <div>
             <p class="font-bold">Success!</p>
                <p class="text-sm">{{ $message }}</p>
            </div>
            </div>
        </div>
        @endif

    @if (count($errors) > 0)
    <div role="alert">
      <div class="bg-red-500 text-black font-bold rounded-t px-4 py-2">
        Errors
      </div>
      <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-2 py-3 text-red-700">
          <ul class="list-disc">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    </div>
    @endif
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3 mb-6 md:mb-0">
        <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          Name
        </label>
        <input name="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-#e4d4d4; form-control @error('name') border-red-500 @enderror" id="grid-video-name" type="text" placeholder="Video Name" required>
      </div>
    </div>
    <div class="flex flex-wrap -mx- mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
            File
          </label>
          <input type="file" name="file" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white form-control @error('file') border-red-500 @enderror" id="grid-video-fiile" type="text" placeholder="Upload a video">
        </div>
      </div>


    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-description">
          Description
        </label>
        <textarea name="description" rows="3" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 form-control @error('description') border-red-500 @enderror" id="grid-textarea" placeholder="Video Description" required></textarea>
        <p class="text-gray-600 text-xs italic">Make it as long and as crazy as youd like</p>
      </div>
    </div>

    <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button class="shadow bg-green-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
            Upload
          </button>
        </div>
      </div>
  </form>
{{-- </div> --}}
</div>
</section>


  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
        Created By JOY MACWAN...!
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>
