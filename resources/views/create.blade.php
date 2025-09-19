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
        <h2 class="text-red-500 text-xl">Create</h2>
        <a href="/" class="bg-green-500 text-white rounded py-2 px-4">Back To Home</a>
       </div>


            <div>
                <form method="POST" action="{{route('store')}}">
                @csrf
                <div class="flex flex-col gap-5">
                    <label for="">Name</label>
                    <input type="text" name="name" class="border border-black">
                    <label for="">Description</label>
                    <input type="text" name="description" class="border border-black">
                    <label for="">Select Image</label>
                    <input type="file" name="image">
                    <div>
                        <input type="submit" class="bg-blue-500 text-white rounded py-2 px-4" value="Submit">
                    </div>
                </div>
                </form>
            </div>
     </div>
</body>
</html>