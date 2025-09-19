<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>

    <link rel="stylesheet" href="/output.css">
</head>

<body>

<div class="flex border-2 border-gray-200">
    </div>

<nav class="bg-gray-100 p-4">
    <div class="container mx-auto">
        <a class="text-xl font-bold text-gray-800" href="#">Peminjaman Kazu</a>
    </div>
</nav>

<div class="container mx-auto mt-10 p-6">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <form action="#" method="POST">
            <h1 class="text-2xl font-bold mb-6">DAFTAR PEMINJAMAN</h1>
            
            <div class="mb-4">
                <label for="barang" class="block text-gray-700 font-semibold mb-2">Nama Barang :</label>
                <input type="text" id="barang" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Nama Barang">
            </div>
            
            <div class="mb-4">
                <label for="jumlah" class="block text-gray-700 font-semibold mb-2">Jumlah Barang :</label>
                <input type="number" id="jumlah" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="0">
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Kirim</button>

            
        </form>
    </div>
</div>

</body>
</html>