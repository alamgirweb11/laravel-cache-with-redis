<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                        @if (Session::has('message'))
                        <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-x-4">
                            <div>
                              <p class="text-red-500">{{ Session::get('message') }}</p>
                            </div>
                          </div>
                    @endif
                    <div
                        class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                        <div class="flex justify-between">
                            <div class="inline-flex  w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                                <div class="flex flex-wrap items-stretch w-full mb-6 relative">
                                    <a href="{{ route('posts.index') }}"
                                        class="px-2 py-2 border border-blue-500 text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Post Lists</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                        <form action="{{ route('posts.store') }}" method="POST" class="py-2 px-2">
                            @csrf
                           <div class="pb-3">
                            <label class="block">
                                <span class="block text-md font-medium text-slate-700">Category</span>
                                <select class="px-1 py-1 w-full border border-black" name="category_id">
                                     <option value="" selected>--please select--</option>
                                     @foreach ($categories as $category)
                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                     @endforeach
                                  </select>
                                  @error('category_id')
                                  <p class="text-red-500 p-2">{{ $message }}</p>
                                  @enderror
                              </label>
                           </div>
                           <div class="pb-3">
                            <label class="block">
                                <span class="block text-md font-medium text-slate-700">Title</span>
                                <input class="w-full border border-black px-1 py-1" name="title"/>
                                @error('title')
                                <p class="text-red-500 p-2">{{ $message }}</p>
                                @enderror
                              </label>
                           </div>
                           <div class="pb-3">
                            <label class="block">
                                <span class="block text-md font-medium text-slate-700">Description</span>
                                <textarea class="w-full border border-black px-1 py-1" name="description" rows="3"></textarea>
                                @error('description')
                                <p class="text-red-500 p-2">{{ $message }}</p>
                                @enderror
                            </label>
                           </div>
                           <button type="submit" value="submit" class="px-2 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
