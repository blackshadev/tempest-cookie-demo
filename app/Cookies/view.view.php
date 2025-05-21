<x-main :title="$cookie->title">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
        <div class="lg:max-w-lg lg:self-end">

            <section aria-labelledby="information-heading" class="mt-4">
                <h2 id="information-heading" class="sr-only">Product information</h2>

                <div class="flex items-center">
                    <div class="ml-4 border-l border-gray-300 pl-4">
                        <h2 class="sr-only">Reviews</h2>
                        <div class="flex items-center">
                            <p class="text-lg text-gray-900 sm:text-xl">{{ $cookie->averageRating }} out of 5</p>
                            <p class="ml-2 text-sm text-gray-500">{{ count($reviews) }} reviews</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="ml-4 border-l border-gray-300 pl-4">
                        <h2 class="sr-only">Cook</h2>
                        <div class="flex items-center">
                            <p class="text-lg text-gray-900 sm:text-xl">By</p>
                            <p class="ml-2 text-sm text-gray-500">{{ $cookie->cook->name }}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Product image -->
        <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
            <img src="{{ $cookie->image }}" class="aspect-square w-full rounded-lg object-cover" />
        </div>
    </div>
</x-main>
