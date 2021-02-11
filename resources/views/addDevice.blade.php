<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a device') }}
        </h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('devices') }}">Back </a>
        </div>
    </x-slot>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('device.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <strong>Gate Key</strong>
                                    <input type="text" name="gate_key" class="form-control" placeholder="Gate Key" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>    
                    </form>                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>