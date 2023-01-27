<x-guest-layout>
    <!-- The grid parent -->
    <div class="container mx-auto text-center ">
    <p class="text-black/50 dark:text-gray-400 text-center uppercase text-2xl font-bold">Categories</p>
            <hr class="mx-auto w-24  h-1 bg-gray-100 rounded border-0 md:my-6 dark:bg-gray-700 ">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8 ">
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 ">
                @for($i = 0; $i < 4; $i++)
                <a href="phone-profile" class="group border border-gray-300 rounded-2xl ">
                    <div class="aspect-w-1 aspect-h-1 w-full xl:aspect-w-7 xl:aspect-h-8 ">
                        <img src="https://images.pexels.com/photos/14127944/pexels-photo-14127944.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load" alt="" class=" rounded-t-2xl object-contain object-center ">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-800  text-left p-4">iPhone 14 </h3>
                    <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </a>
            @endfor  
            </div>
        </div>
    </div>

</x-guest-layout>