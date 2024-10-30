<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Freya</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-blue-900 text-white">
  <header class="py-4 px-6 flex justify-between items-center">
    <a href="#" class="text-2xl font-bold">Freya</a>
    <nav class="flex space-x-4">
      <a href="#" class="hover:text-blue-400">Home</a>
      <a href="#" class="hover:text-blue-400">About</a>
      <a href="#" class="hover:text-blue-400">Project</a>
      <a href="#" class="hover:text-blue-400">Contact</a>
    </nav>
  </header>

  <main class="container mx-auto py-8 px-6">
    <section class="flex items-center justify-center h-screen">
      <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">Hi, I'm Atha Putra.</h1>
        <p class="text-xl mb-8">Student Developer</p>
        <p class="mb-8">Saya adalah Siswa yang masih belajar dalam dunia Percodingan</p>
        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Contact</a>
      </div>
    </section>

    <section class="mb-12">
      <h2 class="text-2xl font-bold mb-4">About</h2>
      <p>Perkenalkan nama saya adalah Atha Putra Prastacka. Saya adalah Programmer Pemula yang masih belajar tentang dunia percodigan. Saya belajar Coding mulai tahun 2023 di SMK Telkom Purwokerto.</p>
      <a href="{{ route('about') }}" class="text-3px font-bold mb-4"><h3>Baca Selengkapnya.....</h3></a>
    </section>

    <section class="mb-12">
      <h2 class="text-2xl font-bold mb-4">Project</h2>
      <div class="place-items-center h-1000px">
        <div class="bg-blue-500 rounded-lg shadow-lg p-6">
          <img src="project-image-1.jpg" alt="Project 1" class="mb-4 rounded-lg">
          <h3 class="text-xl font-bold mb-2">Project 1</h3>
          <p>Description of Project 1</p>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-blue-800 py-4 px-6 text-center">
    <p>&copy; 2023 Freya. All rights reserved.</p>
  </footer>
</body>
</html>