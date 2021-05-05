<x-app-nonav-layout>
    <div class="flex flex-col justify-center w-full h-screen max-w-xl p-4 mx-auto space-y-4 border rounded">
    <h1>Identificador de Pago: {{ $response->id }}</h1>
    <hr>
    <h1>Monto Pagado: {{ $response->transaction_amount }}</h1>

    <hr>

    Comisiones:
    <h1>{{ $response->fee_details[0]->type }}: {{ $response->fee_details[0]->amount }}</h1>

    <hr>

    <h1>{{ $response->fee_details[1]->type}}: {{ $response->fee_details[1]->amount }}</h1>

</div>

</x-app-nonav-layout>
