@extends('layouts.backoffice')

@section('content')
<!-- component -->

<div class="flex h-screen mx-auto overflow-y-auto max-w-7xl bg-gray-50">
    <div class="w-2/5 border-l border-r">
        <div class="pb-4 ">
            <a href="#" class="block py-3 bg-white ">
                <div class="flex justify-between px-4 py-2">
                    <span class="text-sm font-semibold text-gray-900">Gloria Roberston</span>
                    <span class="text-sm font-semibold text-gray-600">2 days ago</span>
                </div>
                <span class="px-4 py-2 text-sm font-semibold text-gray-900">Refund</span>
                <p class="px-4 py-2 text-sm font-semibold text-gray-700"">Lorem ipsum dolor sit amet consectetur adipisicing <br> dolor sit sit elo  amet consectetur adipisicin elit....</p>
            </a>
            <a href="#" class="block py-3 bg-white border-t">
                <div class="flex justify-between px-4 py-2">
                    <span class="text-sm font-semibold text-gray-900">Gloria Roberston</span>
                    <span class="text-sm font-semibold text-gray-600">2 days ago</span>
                </div>
                <span class="px-4 py-2 text-sm font-semibold text-gray-900">Refund</span>
                <p class="px-4 py-2 text-sm font-semibold text-gray-600"">Lorem ipsum dolor sit amet consectetur adipisicing <br> dolor sit sit elo  amet consectetur adipisicin elit....</p>
            </a>

            <a href="#" class="block py-3 bg-white border-t">
                <div class="flex justify-between px-4 py-2">
                    <span class="text-sm font-semibold text-gray-500">Gloria Roberston</span>
                    <span class="text-sm text-gray-500">2 days ago</span>
                </div>
                <span class="px-4 py-2 text-sm font-semibold text-gray-500">Refund</span>
                <p class="px-4 py-2 text-sm text-gray-400"">Lorem ipsum dolor sit amet consectetur adipisicing <br> dolor sit sit elo  amet consectetur adipisicin elit....</p>
            </a>
            <a href="#" class="block py-3 bg-white border-t">
                <div class="flex justify-between px-4 py-2">
                    <span class="text-sm font-semibold text-gray-500">Gloria Roberston</span>
                    <span class="text-sm text-gray-500">2 days ago</span>
                </div>
                <span class="px-4 py-2 text-sm font-semibold text-gray-500">Refund</span>
                <p class="px-4 py-2 text-sm text-gray-400"">Lorem ipsum dolor sit amet consectetur adipisicing <br> dolor sit sit elo  amet consectetur adipisicin elit....</p>
            </a>
        </div>
    </div>
    <div class="w-3/5 bg-white border-r">
        <div class="pb-2 bg-white border-b">
            <a href="#" class="block py-3">
                <div class="flex justify-between px-4 py-2">
                    <span>Re: Refund?</span>
                    <div>
                        <span class="px-3 text-sm font-semibold">#1428</span>
                        <span class="px-4 py-1 text-sm font-semibold text-gray-800 bg-green-300 rounded-full">Active</span>
                    </div>

                </div>
            </a>
        </div>
        <div class="pt-4 ml-2 mr-2 ">
            <a href="#" class="block py-3 pb-4 ">
                <div class="flex justify-between px-4 py-2">
                    <span class="text-sm font-semibold text-gray-900">Gloria Roberston</span>
                    <div class="flex">
                        <span class="px-4 text-sm font-semibold text-gray-600"> yesterday</span>
                        <img class="object-cover w-8 h-8 rounded-full"
                            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80"
                            alt="">
                    </div>
                </div>
                <p class="px-4 py-2 text-sm font-semibold text-gray-700"">Lorem mmmmm ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci laudantium <br> iste delectus explicabo id molestiae cupiditate corrupti distinctio alias. <br> Temporibus quae tenetur quod cupiditate, nostrum tempore inventore maxime ut! </p>
            </a>
        </div>
    </div>
</div>
@endsection