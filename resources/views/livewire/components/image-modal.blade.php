<div x-show="isOpen" @click="isOpen = false" class="fixed inset-0 flex items-center justify-center z-50">
    <div @click="closeModal" class="fixed inset-0 bg-black opacity-50"></div> <!-- Background overlay -->
    <div class="flex justify-center items-center py-12 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0"
        id="inquiryModal">
        <div role="alert" class="container mx-auto md:w-2/3 w-full">

            <!-- Modal content here -->
            <div @click.stop class="container mx-auto md:w-2/3 w-full p-2 relative">

                @php
                    $cleanedPaths = [];
                @endphp

                @foreach ($property->multimediaAssets->images as $image)
                    @php
                        $imagePath = $image->img_file_name;

                        $cleanedPath = explode('","', substr($imagePath, 2, -2));
                        // dd($cleanedPath);
                        $finalPath = str_replace('/', '', $cleanedPath);
                        // dd($finalPath);
                    @endphp
                @endforeach

                <!-- Carousel and other content -->
                <div id="default-carousel" class="relative z-40" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Items -->
                        @php
                            $totalImages = count($finalPath);
                        @endphp
                        @for ($i = 0; $i < $totalImages; $i++)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>

                                <img src="{{ asset('storage\\' . $finalPath[$i]) }}"
                                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="property-images">          
                                </div>
        
                        @endfor

                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        @for ($i = 0; $i < $totalImages; $i++)
                            
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                            data-carousel-slide-to=$i></button>
                        @endfor
                        
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>

                </div>

            </div>

        </div>


    </div>
</div>
