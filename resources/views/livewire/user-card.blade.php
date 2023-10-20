<div class="grid grid-cols-4 gap-4">
    <div class="w-full h-[32rem] col-span-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-left pb-10 p-10 gap-2">
            <img class="w-24 h-24 mb-3 rounded-5 rounded-lg" src="{{ $user['picture'] }}" alt="Bonnie image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user['firstName'] }} {{ $user['lastName']}}</h5>
            <div>
                <span class="text-sm text-gray-500 dark:text-gray-400"> Email Adress </span>
                <p> {{ $user['email'] }} </p>
            </div>
            <div>
                <span class="text-sm text-gray-500 dark:text-gray-400"> Phone Number </span>
                <p> {{ $user['phone'] }} </p>
            </div>
            <div>
                <span class="text-sm text-gray-500 dark:text-gray-400"> Home Adress </span>
                @foreach ($user['location'] as $key => $location)
                    @if ($key == 'street')
                        <p> {!! $location !!} </p>
                    @endif
                    @if ($key == 'city')
                        <p> {!! $location !!} </p>
                    @endif
                    @if ($key == 'state')
                        <p> {!! $location !!} </p>
                    @endif
                    @if ($key == 'country')
                        <p> {!! $location !!} </p>
                    @endif
                    @if ($key == 'postcode')
                        <p> {!! $location !!} </p>
                    @endif
                @endforeach
            </div>
            <div>
                <span class="text-sm text-gray-500 dark:text-gray-400"> Birth Day </span>
                <p> {{ date('Y-m-d', strtotime($user['dateOfBirth'])) }} </p>
            </div>
        </div>
    </div>
    
    <div class="col-span-2">
        
        
        <livewire:post-user :user="$user" />
    </div>
</div>