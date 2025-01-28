<x-app-layout>
    <div class="py-12" id="backgrund">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center" style="height: 600px;">
                <div class="flex-1 pr-6">
                    <h1 class="text-4xl font-bold text-gray-800">Welcome to <span class="text-[#8338ec]">Kiddo's Haven</span></h1>
                    <p class="mt-4 text-lg text-gray-600">
                    "Where Playtime Meets Endless Wonder and Joy!"
                    </p>

                    <button class="my-4" onclick="window.location='{{ route('products.index') }}'">All Products</button>
                    </div>
                
                <div class="flex-1" id="image"></div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    #backgrund {
        background-color: #cdb4db; 
    }

    #image {
        background-image: url('{{ asset('img/pink-blue.png') }}');
        height: 100%;
        background-repeat: no-repeat;
        background-size: contain; 
        background-position: center; 
    }

    button {
            background-color: #8338ec; 
            color: white; 
            border: none; 
            padding: 12px 24px; 
            font-size: 16px; 
            font-weight: bold;
            border-radius: 25px; 
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); 
            cursor: pointer; 
            transition: all 0.3s ease; 
        }

        button:hover {
            background-color: #8338ec; 
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-3px); 
        }

        button:active {
            transform: translateY(1px); 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
</style>
