<!-- Single Property -->
<section class="px-4 py-4 bg-gray-200 lg:px-20 lg:py-8">
    <div class="flex flex-wrap lg:space-x-12">

        <div class="lg:w-3/5">

         
            Property ID: {{ $property->id }}
            
            <h1 class="mb-4 text-2xl font-medium text-center text-gray-900 lg:text-3xl">{{$property->title}}</h1>

            {{-- property image display div --}}
            <div class="img-display">
                <div class="img-showcase">
                    {{-- main image display --}}
                    <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="property" class="w-full">
                    <img src="https://images.unsplash.com/photo-1448630360428-65456885c650?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=867&q=80"
                        alt="property" class="w-full">
                    <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                        alt="property" class="w-full">
                    <img src="https://images.unsplash.com/flagged/photo-1564767609342-620cb19b2357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                        alt="property" class="w-full">


                </div>

                <div class="flex mt-4 space-x-4 img-select">
                    <div class="img-item">
                        <a href="" data-id="1">
                            <img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="" data-id="2">
                            <img src="https://images.unsplash.com/photo-1448630360428-65456885c650?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=867&q=80"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="" data-id="3">
                            <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="" data-id="4">
                            <img src="https://images.unsplash.com/flagged/photo-1564767609342-620cb19b2357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=773&q=80"
                                alt="property" class="w-12 lg:w-52">
                        </a>
                    </div>

                </div>
            </div>
            <div class="mt-4">
                <div>
                    {{-- div for features --}}

                    <div class="flex flex-wrap ">
                        <div class="w-full p-2 lg:w-1/2">
                            <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <span class="font-medium">4 Beds</span>
                            </div>
                        </div>
                        <div class="w-full p-2 lg:w-1/2">
                            <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <span class="font-medium">Area 550 sqft</span>
                            </div>
                        </div>
                        <div class="w-full p-2 lg:w-1/2">
                            <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <span class="font-medium">Bedroom 6</span>
                            </div>
                        </div>
                        <div class="w-full p-2 lg:w-1/2">
                            <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <span class="font-medium">Kitchen 2</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    {{-- div for description --}}
                    <h4 class="text-2xl font-bold">Description</h4>
                    <p class="my-4">{{$property->description}}</p>

                </div>

                <div>
                    {{-- features --}}
                    @foreach ($property->features as $propertyFeature)

                    {{dd($propertyFeature)}}
                        
                        <div class="w-full p-2 lg:w-1/2">
                            <div class="flex items-center h-full p-4 bg-gray-100 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <span class="font-medium">Kitchen 2</span>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>

        {{-- Inquire section --}}
        <div class="lg:w-1/3 lg:mt-4 lg:mb-10 mx-auto sm:w-full">
            <div class="bg-white min-h-302 top-20 shadow-md rounded-md px-8 py-10 sticky">
                <div class="text-center mb-8 text-lg font-bold">
                    <h5>Ask About the Property?</h5>
                </div>

                <div class="flex justify-center gap-10 mb-6">
                    <!-- Lister Image -->
                    <div class="flex items-center">
                        <img src="/assets/images/logo.svg" alt=""
                            class="border-2 border-white w-20 h-20 rounded-full shadow-md">
                    </div>
                    <!-- Lister Details -->
                    <div>
                        <h5 class="pt-4 mb-2 text-lg font-normal">{{$property->user->name}}</h5>
                        <p class="font-light text-base">Contact Person</p>
                    </div>

                </div>
                <div class="flex flex-col items-center sm:flex-row sm:items-center justify-center gap-4 mb-10">
                    <span
                        class="mr-12 text-lg font-medium text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-white">+63975</span>
                    <a href=""
                        class="text-lg text-orange-500 font-bold cursor-pointer border border-solid border-orange-500 hover:bg-orange-500 hover:text-white px-8 py-2 rounded-md"
                        style="color: #ff8700">Inquire</a>
                </div>

                <form action="" method="post">
                    <div class="mb-4">
                        <input id="name" name="name" type="text" placeholder="Full Name*"
                            class="border border-gray-300 rounded-lg w-full py-2 px-4 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center">
                            {{-- <span class="text-lg font-bold mr-2">+63</span> --}}
                            <input
                                class="border border-gray-300 rounded-lg flex-1 py-2 px-4 focus:outline-none focus:border-blue-500"
                                id="phone" name="phone" type="tel" placeholder="Phone Number*">

                        </div>
                    </div>
                    <div class="mb-4">
                        <input id="email" name="email" type="email" placeholder="Email*"
                            class="border border-gray-300 rounded-lg w-full py-2 px-4 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="flex justify-center mt-6">
                        <button type="submit"
                            class="bg-blue-500 text-white rounded-lg py-2 px-4 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Contact Agent
                        </button>
                    </div>
                </form>
                {{-- terms and condition --}}
                <div class="mt-4 text-xs overflow-wrap-break-word text-center">
                    <span>
                        By clicking Contact Seller, you are accepting Mindanao Properties
                    </span>
                    <br>
                    <a href="" style="color: #0cf">Terms and Condition</a>
                    <span>and</span>
                    <a href="" style="color: #0cf">Privacy Policy</a>
                    <span>page.</span>
                </div>
            </div>
        </div>
    </div>
</section>
