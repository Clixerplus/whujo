<section class="w-full p-10 bg-gray-200 rounded-md">

    <h3 class="pb-4 text-xl font-semibold border-b border-gray-400">Servicios Adicionales</h3>

    <hr>

    {{-- Lista de Microservicios --}}
    <form action="/checkout" method="POST">

        @csrf

        <div class="rounded">

            <div class="py-4 space-y-4 d-flex justify-content-between">
                @foreach ($service->microservices as $microservice)
                <div class="flex mb-3 space-x-2">
                    <x-switch id="check_{{ $microservice->id }}" key="microservices[]"
                        wire:click="sumarRestar({{ $microservice->id }})" :value="$microservice->id" />
                    <label class="overflow-hidden whitespace-nowrap overflow-ellipsis"
                        for="check_{{ $microservice }}">{{ $microservice->name }}.</label>
                </div>
                @endforeach
                <hr>
                <div class="flex justify-between my-6 space-x-2bg-gray-200">
                    <span>Total</span>
                    <span class="text-lg font-bold">
                        $ {{ number_format($total, 2,',','.') ?? '25000' }}
                    </span>
                </div>
            </div>

        </div>
        <input type="hidden" value="{{ $service->id }}" name="serviceId">
        <!-- component -->
        <x-datepicker name="date" />

        {{-- Boton de Contratar --}}
        <x-button type="submit"
            class="w-full py-4 rounded-md bg-primary hover:bg-primary-light hover:shadow-w3 transition-300">
            Solicitar Servicio
        </x-button>

    </form>
</section>
