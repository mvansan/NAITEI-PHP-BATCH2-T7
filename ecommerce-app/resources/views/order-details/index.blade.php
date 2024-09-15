<x-layout>
	<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
  		<div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
    		<div class="mx-auto max-w-5xl">
      			<div class="gap-4 sm:flex sm:items-center sm:justify-between">
        			<h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">{{__('My orders')}}</h2>

        			<div class="mt-6 gap-4 space-y-4 sm:mt-0 sm:flex sm:items-center sm:justify-end sm:space-y-0">
          			<div>
            			<label for="order-type" class="sr-only mb-2 block text-sm font-medium text-gray-900 dark:text-white">{{__('Select order type')}}</label>
						<select id="order-type" class="block w-full min-w-[8rem] rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
							<option selected>{{__('All orders')}}</option>
							<option value="pre-order">{{__('Pre-order')}}</option>
							<option value="transit">{{__('In transit')}}</option>
							<option value="confirmed">{{__('Confirmed')}}</option>
							<option value="cancelled">{{__('Cancelled')}}</option>
						</select>
          			</div>

          			<span class="inline-block text-gray-500 dark:text-gray-400"> {{__('from')}} </span>

					<div>
						<label for="duration" class="sr-only mb-2 block text-sm font-medium text-gray-900 dark:text-white">Select duration</label>
						<select id="duration" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
							<option selected>{{__('this week')}}</option>
							<option value="this month">{{__('this month')}}</option>
							<option value="last 3 months">{{__('the last 3 months')}}</option>
							<option value="lats 6 months">{{__('the last 6 months')}}</option>
							<option value="this year">{{__('this year')}}</option>
						</select>
					</div>
        		</div>
      		</div>

			<div class="mt-6 flow-root sm:mt-8">
        		<div class="divide-y divide-gray-200 dark:divide-gray-700">
					@foreach ($orders as $key=>$order)
					<x-order
						:count="$key"
						:id="$order->id"
						:date="$order->order_date"
						:total="$order->order_total"
						:status="$order->status->status"
					/>
					@endforeach
				</div>
			</div>

      		<nav class="mt-6 flex items-center justify-center sm:mt-8" aria-label="Page navigation example">
        		<ul class="flex h-8 items-center -space-x-px text-sm">
					<li>
						<a href="#" class="ms-0 flex h-8 items-center justify-center rounded-s-lg border border-e-0 border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
							<span class="sr-only">Previous</span>
							<svg class="h-4 w-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
					</li>
					<li>
						<a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
					</li>
					<li>
						<a href="#" aria-current="page" class="z-10 flex h-8 items-center justify-center border border-primary-300 bg-primary-50 px-3 leading-tight text-primary-600 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
					</li>
          			<li>
           				<a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
          			</li>
          			<li>
            			<a href="#" class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
					</li>
					<li>
						<a href="#" class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
							<span class="sr-only">Next</span>
							<svg class="h-4 w-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
							</svg>
						</a>
          			</li>
        		</ul>
			</nav>
		</div>
	</section>
</x-layout>

