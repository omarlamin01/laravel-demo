@props(['lst'])
<!-- Item -->
<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$lst->logo ? asset('storage/' . $lst->logo) : asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$lst['id']}}">{{$lst['title']}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$lst['company']}}</div>
            <!-- Tags here -->
            <x-listing-tags :tagsCsv="$lst->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$lst['location']}}
            </div>
        </div>
    </div>
</x-card>
