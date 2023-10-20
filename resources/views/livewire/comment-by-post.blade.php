<div>
    @if(isset($comments['data']))
        @foreach ($comments['data'] as $key => $comment)
            <div class="w-full flex flex-col w-full bg-white p-4 gap-4 mb-4 text-black rounded shadow">
                <div class="flex flex-row gap-5 items-center">
                    <img class="w-16 h-16 object-cover rounded-full" src="@if(isset($comment['owner']['picture'])) {{ $comment['owner']['picture'] }} @endif" alt="Bonnie image" />
                    <div class="flex flex-col">
                        <a href="@if(isset($comment['owner']['id'])){{ route('user.card', $comment['owner']['id']) }}@endif" class="bold-text">
                            @if(isset($comment['owner']['firstName']))
                                {!! $comment['owner']['firstName'] !!}{{ $comment['owner']['lastName'] }}
                            @endif
                        </a>
                        <small class="text-sm text-gray-700">{{ date('Y-m-d', strtotime($comment['publishDate'])) }}</small>
                    </div>
                    <div class="flex px-4 items-end">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown"
                            class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                            type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 16 3">
                                <path
                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export
                                        Data</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <p>{{ $comment['message'] }}</p>
                </div>
            </div>
        @endforeach
    @endif
</div>
