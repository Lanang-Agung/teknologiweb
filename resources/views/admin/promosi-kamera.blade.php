<x-admin-dashboard>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 leading-tight text-center pt-6">
            Kelola Data Kamera
        </h2>

    </x-slot>

    <div class="py-12">
        <form class="flex flex-col px-6" action="">
            <label for="">Nama Kamera</label>
            <input class="border-2 border-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent mb-7 " type="text">
            
            <label for="">Harga Sewa</label>
            <input class="border-2 border-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent mb-7" type="number">

            <label for="">Status Kamera</label>
            <input class= "border-2 border-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent mb-7" type="text">
            
            <label for="">Foto</label>
        </form>
        
    </div>
</x-admin-dashboard>