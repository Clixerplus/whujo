<div class="relative">
    <input type="text" wire:model.debounce.500ms="search" placeholder="Buscar" class="w-full p-2 border rounded-md">

    @isset($results)
    <ul class="shadow">

        @foreach ($results as $result)
        <li wire:click="selectLocation('{{ $loop->index }}')" class="p-3 cursor-pointer hover:bg-gray-100">
            {{ $result['description'] }}
        </li>
        @endforeach
    </ul>
    @endisset

    <h1>{{ $location }}</h1>

    <h1>En Javascript</h1>
    <p id="geo"></p>

    <script>
        var options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  };

  function success(pos) {
    var crd = pos.coords;
    const geo = document.getElementById('geo');

    geo.innerHTML = 'Your current position is: Latitude : ' + crd.latitude + 'Longitude: ' + crd.longitude + 'More or less ' + crd.accuracy + ' meters.';

    console.log('Your current position is: Latitude : ' + crd.latitude + 'Longitude: ' + crd.longitude + 'More or less ' + crd.accuracy + ' meters.');
  };

  function error(err) {
    console.warn('ERROR(' + err.code + '): ' + err.message);
  };

  navigator.geolocation.getCurrentPosition(success, error, options);

    </script>
</div>
