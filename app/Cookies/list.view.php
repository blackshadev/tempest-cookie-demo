<x-main title="Cookies">
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

        <div class="group relative" :foreach="$this->cookies as $cookie">
            <img src="{{ $cookie->image }}"
                 alt="Front of men&#039;s Basic Tee in black."
                 class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="/cookies/{{ $cookie->id }}">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            {{ $cookie->title }}
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $cookie->cook->name }}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">{{ $cookie->averageRating }} / 5</p>
            </div>
        </div>
    </div>
</x-main>
