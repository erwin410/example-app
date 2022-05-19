



<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="/livres" method="POST">
      @csrf
      <div class="shadow overflow-hidden sm:rounded-md">
        <div class="px-4 py-5 bg-white sm:p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="Titre" class="block text-sm font-medium text-gray-700">Titre</label>
              <input type="text" name="titre" id="titre" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
            </div>

            <div class="col-span-6 sm:col-span-3">

              <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
              <textarea name="extrait" id="extrait" rows="4" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block h-full w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
              </textarea>
            </div>

            <div class="col-span-6 sm:col-span-3">

                <label for="country" class="block text-sm font-medium text-gray-700">Auteurs</label>
                <select id="auteurs" name="auteurs" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                 @foreach ($auteurs as $auteur)
                  <option value="{{$auteur->id}}">{{$auteur->nom}} {{$auteur->prenom}}</option>
                 @endforeach

                </select>
              </div>
            
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
              </div>
            </div>
        </div>
      </div>
    </form>

</div>