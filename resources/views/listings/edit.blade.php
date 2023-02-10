<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Moment
            </h2>
            <p class="mb-4">Edit: {{ $listing->title }}</p>
        </header>

        <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="city" class="inline-block text-lg mb-2">City</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="city"
                    value="{{ $listing->city }}" />
                @error('city')
                <p class="text-red-500 text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ $listing->title}}" placeholder="Example: Paris and it's best coffee shops!" />
            </div>
            @error('title')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror

            <div class="mb-6">
                <label for="country" class="inline-block text-lg mb-2">Country</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="country"
                    value="{{ $listing->country }}" placeholder="Example: France, Portugal, Spain" />
            </div>
            @error('country')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror

            <div class="mb-6">
                <label for="season" class="inline-block text-lg mb-2">Season</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="season"
                    value="{{ $listing->season }}" placeholder="Example: Winter, Summer, " />
            </div>
            @error('season')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    value="{{ $listing->tags }}" placeholder="Example:shop, coffee, skydiving etc" />
            </div>
            @error('tags')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                <img class="w-48 mr-6 mb-6" src="{{ $listing->logo ? asset
                    ('storage/' . $listing->logo) : ('https://picsum.photos/300/350')}}" alt="" />

                @error('logo')
                <p class="text-red-500 text-xs mt-1">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Brief description of the best moment you experiency">
                   {{$listing->description }}
                </textarea>
            </div>
            @error('description')
            <p class="text-red-500 text-xs mt-1">
                {{ $message }}
            </p>
            @enderror
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Edit Moment
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>