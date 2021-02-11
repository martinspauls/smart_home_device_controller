<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devices') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    <a href="{{route('addDevice')}}" class="float-right m-2 p-2 text-white font-semibold bg-blue-500 rounded">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                </div>
                <div class="p-6 bg-white border-b border-blue-200">
                    @foreach ($devices as $device)
                    <a href="
                    @if($device->gate_status == '0')
                        {{ route('device.open', $device->id) }}
                    @else
                        {{ route('device.close', $device->id) }}
                    @endif">
                        <div class="box-border 
                        @if($device->gate_status =='0')
                            bg-red-400
                        @else
                            bg-green-300
                        @endif
                        h-32 w-100 p-4 m-4 border-4 hover:bg-red-200">
                            <form action="{{ route('device.destroy', $device->id) }}" method="POST">
                                <div class="float-right">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit">
                                        <svg class="w-6 h-6" fill="red" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </button>
                                </div>
                                <h2 class="font-semibold text-4xl text-black-1000 leading-tight">
                                    {{ $device->name }}
                                </h2>
                                <div class="text-xs text-gray-100">
                                    {{ $device->gate_key }}
                                </div>
                            </form>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>