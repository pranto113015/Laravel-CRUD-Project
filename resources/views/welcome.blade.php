<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style type="text/tailwindcss">
      @layer utilities {
        .container{
            @apply px-10  mx-auto;
        }
      }
    </style>
    
      <title>Laravel CRUD</title>
</head>
<body>
    <div class="container">
     <div class="flex justify-between my-5">    
        <h2 class="text-red-500 text-xl">Home</h2>
        <a href="/create" class="bg-green-500 text-white rounded py-2 px-4">Add New Post</a>
       </div>


       <!-- Success Message Section -->
        @if(session('success'))
          <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
              {{ session('success') }}
          </div>
        @endif

     </div>
</body>
</html>