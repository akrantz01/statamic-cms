@extends('statamic::layout')

@section('content')
    <div class="flex mb-5">
        <h1>{{ __('The Statamic Playground') }}</h1>
    </div>

    <h2 class="mb-1">
        Form Inputs
    </h2>

    <div class="shadow bg-white p-4 rounded-lg mb-6">
        <div class="mb-2">
            <input type="text" placeholder="unstyled">
        </div>
        <div class="mb-2">
            <input type="text" class="form-control" placeholder="v2 style">
        </div>
        <div class="mb-2 flex">
            <input type="text" class="input-text" placeholder="v3 style">
            <select class="ml-1 input-select" name="" id="">
                <option value="">Oh hai Mark</option>
            </select>
        </div>
        <div class="mb-2">
            <textarea name="" class="input-text" placeholder="v3 style"></textarea>
        </div>
        <div class="mb-2">
            <select class="select" name="" id="">
                <option value="">Oh hai Mark</option>
                <option value="">I did not do it i did not</option>
            </select>
        </div>
    </div>


    <h2 class="mb-1">Typography</h2>
    <div class="shadow bg-white p-4 rounded-lg overflow-hidden mb-6">
        <h1 class="mb-2">This is first level heading</h1>
        <h2 class="mb-2">This is a second level heading</h2>
        <h3 class="mb-2">This is a third level heading</h3>
        <h4 class="mb-2">This is a fourth level heading</h4>
        <h5 class="mb-2">This is a fifth level heading</h5>
        <h6 class="mb-2">This is a sixth level heading</h6>
        <p>Paragraph text. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam error tempore veritatis, laborum, et assumenda? Necessitatibus excepturi enim quidem maxime! Temporibus dolorum fugit aspernatur.
    </div>

    <h2 class="mb-1">Buttons</h2>
    <div class="shadow bg-white p-4 rounded-lg overflow-hidden mb-6">
        <h6 class="mb-2">Flavors</h6>
        <div class="mb-4">
            <button class="btn mr-2">Default Button</button>
            <button class="btn btn-primary mr-2">Primary Button</button>
            <button class="btn btn-secondary mr-2">Secondary Button</button>
        </div>
        <h6 class="mb-2">Disabled States</h6>
        <div class="mb-4">
            <button disabled class="btn disabled mr-2">Default Button</button>
            <button disabled class="btn btn-primary disabled mr-2">Primary Button</button>
            <button disabled class="btn btn-secondary disabled mr-2">Secondary Button</button>
        </div>
        <h6 class="mb-2">Large Variation</h6>
        <div>
            <button class="btn btn-lg mr-2">Default Button</button>
            <button class="btn btn-primary btn-lg mr-2">Primary Button</button>
            <button class="btn btn-secondary btn-lg mr-2">Secondary Button</button>
        </div>
    </div>

    <h2 class="mb-1">Colors</h2>
    <div class="bg-white p-5 shadow rounded-lg overflow-hidden mb-6">

        <h6 class="mb-2">Greys</h6>
        <div class="flex flex-row-reverse text-sm text-center mb-4">
            <div class="text-black bg-white p-3 flex-1">White</div>
            <div class="text-black bg-grey-lightest p-3 flex-1">Lightest</div>
            <div class="text-black bg-grey-lighter p-3 flex-1">Lighter</div>
            <div class="text-black bg-grey-light p-3 flex-1">Light</div>
            <div class="text-black bg-grey p-3 flex-1">Base</div>
            <div class="text-white bg-grey-dark p-3 flex-1">Dark</div>
            <div class="text-white bg-grey-darker p-3 flex-1">Darker</div>
            <div class="text-white bg-grey-darkest p-3 flex-1">Darkest</div>
            <div class="text-white bg-black p-3 flex-1">Black</div>
        </div>

        <h6 class="mb-2">Other Colors (needs simplifying)</h6>
        <div class="flex text-sm text-center">
            <div class="text-black bg-blue p-3 flex-1">Blue</div>
            <div class="text-black bg-green p-3 flex-1">Green</div>
            <div class="text-black bg-red p-3 flex-1">Red</div>
            <div class="text-black bg-yellow p-3 flex-1">Yellow</div>
            <div class="text-black bg-yellow-dark p-3 flex-1">Yellow Dark</div>
            <div class="text-black bg-pink p-3 flex-1">Pink</div>
            <div class="text-black bg-purple p-3 flex-1">Purple</div>
        </div>
    </div>

    <h2 class="mb-1">Widgets</h2>
    <div class="flex flex-wrap -mx-2 mb-4">
        <div class="w-1/3 px-2">
            <div class="card px-3">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-bold text-grey">New Users</h3>
                    <select class="text-xs" name="" id="">
                        <option value="">30 Days</option>
                    </select>
                </div>
                <div class="text-4xl mb-2">89</div>
                <div class="flex items-center ">
                    <span class="w-4 h-4 text-green mr-1">@svg('new/performance-increase-1')</span>
                    <span class="leading-none text-sm">8.54% Increase</span>
                </div>
            </div>
        </div>
        <div class="w-1/3 px-2">
            <div class="card px-3">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-bold text-grey">Form Submissions</h3>
                    <select class="text-xs" name="" id="">
                        <option value="">7 Days</option>
                    </select>
                </div>
                <div class="text-4xl mb-2">35</div>
                <div class="flex items-center ">
                    <span class="w-4 h-4 text-green mr-1">@svg('new/performance-increase-1')</span>
                    <span class="leading-none text-sm">2.15% Increase</span>
                </div>
            </div>
        </div>
        <div class="w-1/3 px-2">
            <div class="card bg-grey-darker px-3">
                <div class="flex justify-between items-center mb-2">
                    <h3 class="font-bold text-grey-light">New Users</h3>
                    <select class="text-xs" name="" id="" class="bg-grey-dark border-grey-dark text-grey-light">
                        <option value="">30 Days</option>
                    </select>
                </div>
                <div class="text-4xl mb-2 text-grey-light">251</div>
                <div class="flex items-center ">
                    <span class="w-4 h-4 text-green mr-1">@svg('new/performance-increase-1')</span>
                    <span class="leading-none text-grey-light text-sm">8.54% Increase</span>
                </div>
            </div>
        </div>
    </div>
@stop
