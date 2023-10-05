<aside x-data="{ open: true }"  id="sidebar" class="w-full " aria-label="Sidebar">
   <div class="flex">
      <div x-show="open" x-show="open" class=" flex-1 flex flex-col min-h-0 pt-0 h-screen w-64">
         <div class="flex-1 flex flex-col overflow-y-auto fixed w-inhirit">
            <div class="flex-1 px-3 divide-y space-y-1 pt-3">
               <ul class="space-y-2 pb-2">
                  <li>
                     <x-side-panel-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <x-slot name="svg">
                           <x-bxs-dashboard class="w-6 h-6 text-white flex-shrink-0 group-hover:text-gray-900 transition duration-75"/>
                        </x-slot>
                        <x-slot name="name">{{__('Dashboard')}}</x-slot>
                     </x-side-panel-link>
                  </li>
                  <li>
                     <x-side-panel-link href="{{ route('properties') }}" :active="request()->routeIs('properties')">
                        <x-slot name="svg">
                           <x-tni-search-property class="w-6 h-6 text-white flex-shrink-0 group-hover:text-gray-900 transition duration-75"/>
                        </x-slot>
                        <x-slot name="name">{{__('Properties')}}</x-slot>
                     </x-side-panel-link>
                  </li>
                  <li>  
                     <div class="pl-5">
                        <a href="#Main" class="text-base text-white font-normal rounded-lg hover:bg-gray-200 group transition duration-75 flex items-center p-2">
                           <span class="ml-3 text-[14px]">Main
                           </span>
                        </a>
                     </div>
                  </li>
                  
               </ul>
               <div class="space-y-2 pt-2">
                     <a href="" class="text-base text-white font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                        <svg class="w-6 h-6 text-white flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Settings</span>
                     </a>
                     <div class="pl-5">
                        <a href="#numbers-department" class="text-base text-white font-normal rounded-lg hover:bg-gray-200 group transition duration-75 flex items-center p-2">
                           <span class="ml-3 text-[14px]">Add Contact Number
                           </span>
                        </a>
                     </div>  
               </div>
            </div>
         </div>
      </div>
      <div class="-mr-2 justify-end">
         <button @click="open = ! open" class="fixed inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
               <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
               <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
         </button>
      </div>
   </div>
 </aside>

 
 <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop">
</div>
   <!-- Hamburger -->
   