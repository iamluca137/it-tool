@extends('layouts.app')
@section('title', "$tool->name - IT Tools")
@section('content')
    <div class="mx-auto max-w-lg text-center mb-5">
        <h2 class="text-2xl font-bold text-gray-700 md:text-3xl py-3">
            {{ $tool->name }}
        </h2>
        <hr>
        <p class="text-gray-500 mt-4">
            {{ $tool->description }}
        </p>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4 max-w-2xl mx-auto">
        <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <form action="#" class="space-y-4">
                <div class="grid grid-cols-2 gap-6">
                    <div class="grid grid-cols-1 gap-4">
                        <label class="flex justify-end items-center text-end cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Uppercase (ABC...)</span>
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-2 peer-focus:ring-teal-600 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                        <label class="flex justify-end items-center text-start cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Lowercase (abc...)</span>
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  peer-focus:ring-2 peer-focus:ring-teal-600  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <label class="flex justify-start items-center text-start cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Numbers (123...)</span>
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  peer-focus:ring-2 peer-focus:ring-teal-600  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                        <label class="flex justify-start items-center text-start cursor-pointer">
                            <span class="me-3 text-sm font-medium text-gray-900">Symbols (!-;...)</span>
                            <input type="checkbox" value="" class="sr-only peer" checked>
                            <div
                                class="relative w-11 h-6 bg-gray-200 rounded-full peer  peer-focus:ring-2 peer-focus:ring-teal-600  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-teal-600 transition-all">
                            </div>
                        </label>
                    </div>
                </div>

                <div>
                    <div class="mb-4 flex justify-start items-center w-full">
                        <label for="price-range" class="block text-gray-600 w-1/4 text-sm">Length (187)</label>
                        <input type="range" id="price-range" class="w-full accent-teal-600 h-1 bg-gray-200 transition-all"
                            min="0" max="1000" value="500">
                    </div>
                </div>

                <div>
                    <textarea
                        class="w-full rounded-lg border-gray-200 p-3 text-sm bg-gray-50  border focus:ring-teal-500 focus:border-teal-500 text-center"
                        readonly rows="4" id="message">y5md3azs6zcxepzk9slpech3hwbuc5buowd4rpe8uwzzr9rbua94pb14mps1blk5ts032kyw8cx8q05otb0t9a93rux8msyhou2qxbiewf744txowimm25jwurvqyrv0eztaypjk2k5f12z1o9vko89dbihk21mcoactw4z2f479z1fevmxecll1xl6</textarea>
                </div>

                <div class="mt-4 flex justify-center items-center gap-3">
                    <a class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-0 transition-all"
                        href="#">
                        Copy
                    </a>
                    <a class="inline-block rounded px-8 py-2 text-sm font-medium bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-0 transition-all"
                        href="#">
                        Refresh
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
