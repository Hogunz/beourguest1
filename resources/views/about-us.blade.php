<x-guest-layout>

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-black/50 dark:text-white pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-black dark:text-white">It is a long established fact that
                    a reader will be distracted by the readable content of a page when looking at its layout. The point
                    of using Lorem Ipsum.In the first place we have granted to God, and by this our present charter
                    confirmed for us and our heirs forever that the English Church shall be free, and shall have her
                    rights entire, and her liberties inviolate; and we will that it be thus observed; which is apparent
                    from</p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="img/our_team/5.jpg" alt="A group of People" />
            </div>
        </div>
        <div class="container flex justify-center mx-auto pt-16">
            <div>
                <p class="text-3xl lg:text-4xl font-bold leading-9 text-center text-black/50 dark:text-white pb-4">
                    Building Team</p>
                <h1
                    class="xl:text-4xl text-3xl text-center text-gray-800 dark:text-white font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                    The Talented People Behind the Scenes of the Organization</h1>
            </div>
        </div>
        <div class="w-full bg-transparent dark:bg-gray-800 px-10 pt-10">
            <div class="container mx-auto">
                <div role="list" aria-label="Behind the scenes People "
                    class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                    @for ($i = 0; $i < 6; $i++)
                        <div role="listitem"
                            class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-gray-100 dark:bg-gray-900">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-32 w-32">
                                        <img src="img/our_team/2.jpg" alt="Display Picture of Andres Berlin"
                                            role="img" class=" rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <h1 class="font-bold dark:text-white text-3xl text-center mb-1">Jeric Prado</h1>
                                    <p class="text-gray-800 dark:text-white text-sm text-center">Data Analyst</p>
                                    <p class="text-center text-gray-600 dark:text-gray-200 text-base pt-3 font-normal">
                                        test</p>
                                    <div class="w-full flex justify-center pt-5 pb-5">
                                        <a href="javascript:void(0)" class="mx-5">
                                            <div aria-label="Github" role="img">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg"
                                                    alt="github" />
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-5">
                                            <div aria-label="Twitter" role="img">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg2.svg"
                                                    alt="twitter" />
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="mx-5">
                                            <div aria-label="Instagram" role="img">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg"
                                                    alt="instagram" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
