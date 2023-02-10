@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : ('https://picsum.photos/300/350')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->city }}</div>

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->country }}
            </div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-5">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->season }}
            </div>
        </div>
    </div>
</x-card>