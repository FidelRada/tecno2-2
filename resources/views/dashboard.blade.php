<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            {{--@livewire('formulario')--}}
            {{--@livewire('formulario-servicio')--}}
            
            {{--@livewire('categoria-diseño')--}}
            {{--@livewire('sub-categoria')--}}
            
            {{--@livewire('plantilla-diseño');--}}
            {{--@livewire('plantilla-diseño');--}}

            @livewire('forma-de-pago');

        </div>
    </div>
</x-app-layout>
