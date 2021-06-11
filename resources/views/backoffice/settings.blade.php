@extends('layouts.backoffice')

@section('content')
    <div class="py-4">
        @livewire('profile.update-profile-information-form')
    </div>
    <hr class="my-8">
    <div class="py-4 mt-4">
        @livewire('profile.delete-user-form')
    </div>
@endsection
