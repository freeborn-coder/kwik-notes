<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KWIK NOTES</title>

    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
</head>
<body style="font-family:Calibri;" class="bg-red-200">

    <main class="flex h-[100vh]">
        <!-- sidebar -->
        <x-side-menu/>

        <!-- main slot -->
        {{ $slot }}
  </main>
    @livewireScripts

    <script>

        const deleteNote = (elem,noteId) => {
            elem.parentElement.parentElement.classList.toggle('hidden');
            if(confirm('Delete this note?')){
                Livewire.emit('deleteNote',noteId);
            }
        }

    </script>
</body>
</html>
