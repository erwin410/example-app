
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>

        <span>Ajouter un Livre</span>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
            >
            <h4 class="w-full text-4xl text-black font-medium leading-snug">Ajouter un Livre</h4>
                <div class="flex items-center justify-between space-x-4">
    
                    <form action="/livres" method="POST" class="relative w-full mt-6 space-y-8" enctype="multipart/form-data">
                        @csrf
                        <div class="relative">
                           <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Titre</label>
                           <input type="text" name="titre" class="block w-full px-4 py-4 mt-2 text-base text-black placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black">
                        </div>

                        <div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-black">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </div>
                    </div>

                        <div class="relative">
                            <label for="description" class="absolute px-2 ml-2 -mt-3 font-medium text-black bg-white">Description</label>
                            <textarea name="extrait" id="description" cols="30" rows="10"  class="block w-full px-4 py-4 mt-2 text-base text-black placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"></textarea>
                        </div>
                       

                      

                         <div class="relative">
                            <label for="country" class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white">Auteurs</label>
                            <select  name="auteurs" class="mt-1 block w-full py-2 px-3 text-black border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                              @foreach ($auteurs as $auteur)
                              <option value="{{$auteur->id}}">{{$auteur->nom}} {{$auteur->prenom}}</option>
                             @endforeach
                            </select>
                         </div>


                        <div class="relative">
                           <button class="inline-block w-full px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-500 ease">Valider</button>
                        </div>
                     </form>
            </div>
        </div>
    </div>
</div>

