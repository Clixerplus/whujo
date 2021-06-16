@extends('layouts.backoffice')

@section('content')

    @livewire('profile.update-profile-information-form')

    <hr class="my-8">

    @livewire('profile.delete-user-form')

@endsection
