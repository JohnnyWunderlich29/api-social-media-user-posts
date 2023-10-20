<div class="grid-cols-3">
    <div class=" grid-span-2 relative overflow-x-auto shadow-md sm:rounded-lg ">
        <div class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <div class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <div class="table-header-group text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <div class="table-cell px-6 py-3"> Image</div>
                    <div class="table-cell px-6 py-3"> Complete Name </div>
                </div>
                <div class="table-row-group">
                    @if (isset($users['data']))
                        @foreach ($users['data'] as $key => $data)
                            <a href="{{ route('user.card', $data['id']) }}" class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <div class="table-cell px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ $data['picture'] }}" alt="avatar" class="w-10 h-10 rounded-full" />
                                </div>
                                <div class="table-cell px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <p class="self-center">{{ $data['firstName'] }} {{ $data['lastName'] }}</p>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
