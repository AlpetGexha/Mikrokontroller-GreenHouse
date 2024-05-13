<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @if($buzzer)
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-14 h-14 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5"/>
                        </svg>

                        <span class="text-red-600 text-center">
                             Bzzzzzzzzzzzzzzzzzzzzttttt
                        </span>
                    </div>
                @endif

                @if($fire || $smoke)
                    <div class="flex gap-2 my-5 mx-5">
                        @if($fire)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-14 h-14 text-red-800">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z"/>
                            </svg>
                        @endif

                        @if($smoke)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-14 h-14 text-gray-700">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 15a4.5 4.5 0 0 0 4.5 4.5H18a3.75 3.75 0 0 0 1.332-7.257 3 3 0 0 0-3.758-3.848 5.25 5.25 0 0 0-10.233 2.33A4.502 4.502 0 0 0 2.25 15Z"/>
                            </svg>
                        @endif

                    </div>
                @endif

                @if($message)
                    <div
                        class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Danger alert!</span> {{ $message }}
                        </div>
                    </div>
                @endif
            </div>
            <section class="ml-5 my-5 grid grid-cols-3 gap-6">
                <div class="mb-5 flex">
                    <svg fill="#000000"
                         class="h-16 w-16"
                         version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512.001 512.001" xml:space="preserve"> <g>
                            <g>
                                <path
                                    d="M281.12,353.354V42.221C281.12,18.941,262.18,0,238.899,0c-23.282,0-42.221,18.941-42.221,42.221v311.133 c-26.391,15.093-42.646,42.761-42.756,73.36c-0.078,21.959,8.481,42.96,24.097,59.132c15.624,16.179,36.315,25.453,58.26,26.115 c0.886,0.026,1.767,0.04,2.649,0.04c22.227-0.001,43.14-8.461,59.142-23.987c16.642-16.149,25.806-37.809,25.806-60.992 C323.875,396.291,307.619,368.505,281.12,353.354z M286.905,476.506c-13.496,13.095-31.316,20.003-50.142,19.427 c-17.741-0.534-34.507-8.072-47.21-21.226c-12.701-13.152-19.661-30.176-19.597-47.937c0.093-26.181,14.773-49.723,38.31-61.438 c2.724-1.355,4.444-4.136,4.444-7.177V42.221c0-14.44,11.748-26.188,26.188-26.188c14.44,0,26.188,11.748,26.188,26.188v315.935 c0,3.042,1.721,5.821,4.444,7.177c23.632,11.762,38.311,35.4,38.311,61.689C307.842,445.831,300.407,463.405,286.905,476.506z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M246.915,376.889V93.528c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v283.361 c-24.2,3.855-42.756,24.866-42.756,50.133c0,27.995,22.777,50.772,50.772,50.772c27.995,0,50.772-22.777,50.772-50.772 C289.671,401.755,271.115,380.744,246.915,376.889z M238.899,461.761c-19.155,0-34.739-15.584-34.739-34.739 c0-19.155,15.584-34.739,34.739-34.739s34.739,15.584,34.739,34.739C273.638,446.177,258.054,461.761,238.899,461.761z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M350.063,256.534h-42.756c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h42.756 c4.427,0,8.017-3.589,8.017-8.017S354.492,256.534,350.063,256.534z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M332.961,213.778h-25.653c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017h25.653 c4.427,0,8.017-3.589,8.017-8.017C340.978,217.368,337.388,213.778,332.961,213.778z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M350.063,171.023h-42.756c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017h42.756 c4.427,0,8.017-3.589,8.017-8.017C358.08,174.612,354.492,171.023,350.063,171.023z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M332.961,128.267h-25.653c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017h25.653 c4.427,0,8.017-3.589,8.017-8.017C340.978,131.856,337.388,128.267,332.961,128.267z"/>
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M350.063,85.511h-42.756c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017h42.756 c4.427,0,8.017-3.589,8.017-8.017C358.08,89.101,354.491,85.511,350.063,85.511z"/>
                            </g>
                        </g>



            </svg>
                    <span class="">
                    {{$temperature}} °C <br/> {{$humidityValue}} %
                </span>
                </div>

                <div>
                    @if(!$led)
                        <svg version="1.1"
                             class="w-14 h-14"
                             id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px"
                             y="0px" viewBox="0 0 115 122.88" style="" xml:space="preserve"><g>
                                <path
                                    d="M36.37,82.46c-2.88-3.29-5.86-6.71-8.22-11.74c-2.31-4.96-3.59-10.08-3.55-15.4c0.05-5.32,1.4-10.8,4.34-16.46 c0.02-0.04,0.04-0.07,0.06-0.11l0,0c3.85-6.52,9.24-10.88,15.24-13.32c5.03-2.06,10.5-2.76,15.86-2.27 c5.34,0.49,10.57,2.17,15.14,4.87c5.81,3.44,10.59,8.54,13.22,14.98c1.42,3.49,2.38,7.38,2.5,11.64c0.12,4.25-0.61,8.83-2.57,13.67 c-3,7.43-10.01,15.39-14.6,22.7c-0.25-0.05-0.51-0.06-0.77-0.02l-6.19,0.92l9.43-32.8c0.27-0.93-0.28-1.9-1.21-2.17 c-0.93-0.26-1.9,0.28-2.17,1.21L63.01,92.5l-9.36,1.39l-9.89-31.44c0.71,0.14,1.46-0.17,1.85-0.83l7.01-11.93l3.57,8.19 c0.39,0.89,1.42,1.29,2.3,0.91c0.44-0.19,0.76-0.55,0.93-0.96l0,0l3.16-7.98l3.7,9.76c0.34,0.91,1.35,1.36,2.26,1.02 c0.91-0.34,1.36-1.35,1.02-2.26l-5.27-13.9c-0.15-0.49-0.52-0.91-1.03-1.11c-0.9-0.36-1.92,0.09-2.28,0.99l-3.27,8.27l-3.26-7.48 c-0.14-0.33-0.39-0.62-0.72-0.81c-0.83-0.49-1.91-0.21-2.39,0.62l-8.52,14.5l-0.61-1.93c-0.29-0.92-1.27-1.44-2.19-1.15 c-0.92,0.29-1.44,1.27-1.15,2.19l11.27,35.85l-6.78,1.01C41.72,90.57,39.22,85.73,36.37,82.46L36.37,82.46z M14.26,18.49 c-0.79-0.74-1.21-1.73-1.25-2.73c-0.04-1,0.31-2.02,1.04-2.81c0.74-0.79,1.73-1.21,2.73-1.25c1-0.04,2.02,0.31,2.81,1.04l6.28,5.85 c0.79,0.74,1.21,1.73,1.25,2.73c0.04,1.01-0.31,2.02-1.04,2.81c-0.74,0.79-1.73,1.21-2.73,1.25c-1.01,0.04-2.02-0.31-2.81-1.04 L14.26,18.49L14.26,18.49z M3.99,61.66c-1.06,0.02-2.03-0.39-2.75-1.06C0.51,59.91,0.04,58.95,0,57.86 c-0.04-1.08,0.37-2.08,1.06-2.81c0.69-0.73,1.65-1.2,2.74-1.23l8.57-0.29c1.08-0.04,2.08,0.37,2.81,1.06 c0.73,0.69,1.2,1.65,1.23,2.74l0,0.06h0.01l-0.01,0.14c-0.02,1.01-0.42,1.92-1.06,2.61c-0.69,0.73-1.65,1.19-2.74,1.23l-0.06,0 v0.01l-0.09,0L3.99,61.66L3.99,61.66z M110.71,49.51l0.13-0.01c1.02-0.06,1.97,0.27,2.71,0.87c0.78,0.63,1.31,1.57,1.43,2.64 l0,0.04c0.01,0,0.01,0.11,0.01,0.13c0.06,1.02-0.27,1.97-0.87,2.71c-0.63,0.78-1.57,1.31-2.64,1.43l-8.53,0.9 c-1.08,0.11-2.1-0.23-2.87-0.86c-0.78-0.63-1.32-1.57-1.43-2.64c-0.11-1.07,0.23-2.1,0.86-2.87c0.63-0.78,1.57-1.32,2.64-1.43 C105,50.11,107.86,49.78,110.71,49.51L110.71,49.51L110.71,49.51z M93.81,15.37c0.61-0.9,1.51-1.46,2.49-1.66 c0.98-0.19,2.03-0.01,2.94,0.59l0.01,0.01c0.9,0.6,1.47,1.51,1.66,2.49c0.19,0.98,0.01,2.03-0.59,2.94l-4.77,7.13 c-0.6,0.9-1.51,1.47-2.5,1.67c-0.98,0.19-2.03,0.01-2.94-0.59c-0.9-0.6-1.47-1.52-1.67-2.5c-0.19-0.98-0.01-2.03,0.59-2.94 L93.81,15.37L93.81,15.37z M56.77,3.83c0.03-1.09,0.49-2.06,1.22-2.75c0.71-0.68,1.69-1.09,2.75-1.08l0-0.01 c0.09,0,0.18,0.01,0.27,0.02c0.99,0.08,1.88,0.53,2.52,1.2c0.68,0.71,1.09,1.68,1.08,2.75l0.01,0c0,0.07,0,0.14-0.01,0.2 l-0.21,8.37h0.01c0,0.09-0.01,0.18-0.02,0.27c-0.08,1-0.53,1.88-1.2,2.52c-0.72,0.68-1.69,1.09-2.75,1.08v0.01 c-0.09,0-0.18-0.01-0.27-0.02c-1-0.08-1.88-0.53-2.52-1.2c-0.68-0.72-1.09-1.69-1.08-2.75h-0.01c0-0.07,0-0.14,0.01-0.2L56.77,3.83 L56.77,3.83z M71.42,95.84l-0.63,2.95l-0.16,2.1l-25.33,3.77c-0.09-1.51-0.33-3.14-0.71-4.83L71.42,95.84L71.42,95.84z M70.58,105.49l0.02,1.27l0.03,0.44c0.07,0.83,0.08,1.67,0.03,2.5l-0.38,1.83l-23.53,3.5l-0.41-0.94l-0.92-3.76l-0.02-1.09 L70.58,105.49L70.58,105.49z M68.73,116.35c-1.22,2.09-2.9,3.72-4.82,4.83c-1.71,1-3.62,1.57-5.53,1.69 c-1.94,0.12-3.9-0.25-5.69-1.11c-1.22-0.6-2.36-1.43-3.37-2.51L68.73,116.35L68.73,116.35z"/>
                            </g></svg>
                    @else
                        <svg class="w-14 h-14" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 114.98 122.88">
                            <defs>
                                <style>.cls-1 {
                                        fill: #403c47;
                                    }

                                    .cls-2 {
                                        fill: #f4bb2c;
                                    }</style>
                            </defs>
                            <title>idea-bulb</title>
                            <path class="cls-1"
                                  d="M68.5,116.34a13.28,13.28,0,0,1-4.82,4.83,12.55,12.55,0,0,1-5.53,1.69,11.49,11.49,0,0,1-5.69-1.11,11.62,11.62,0,0,1-3.37-2.51l19.41-2.9Zm2.69-20.51-.63,3-.16,2.1-25.32,3.77a30.48,30.48,0,0,0-.71-4.83l26.82-4Zm-.84,9.65,0,1.27,0,.44a17.39,17.39,0,0,1,0,2.5l-.38,1.83L46.53,115l-.41-.94-.92-3.76,0-1.09,25.17-3.75Z"/>
                            <path class="cls-1"
                                  d="M56.76,3.84a3.93,3.93,0,0,1,4-3.83h0L61,0a3.91,3.91,0,0,1,3.6,4h0a1.27,1.27,0,0,1,0,.2l-.21,8.37h0a2.45,2.45,0,0,1,0,.27,3.91,3.91,0,0,1-3.95,3.6h0l-.27,0a3.91,3.91,0,0,1-3.6-3.95h0a1.27,1.27,0,0,1,0-.2l.2-8.41Z"/>
                            <path class="cls-1"
                                  d="M93.8,15.38a3.9,3.9,0,0,1,5.42-1.07h0a3.87,3.87,0,0,1,1.66,2.49,4,4,0,0,1-.59,2.94l-4.76,7.13A3.94,3.94,0,0,1,93,28.54a3.91,3.91,0,0,1-4.61-3.08A4,4,0,0,1,89,22.52l4.78-7.14Z"/>
                            <path class="cls-1"
                                  d="M110.69,49.51h.13A3.92,3.92,0,0,1,115,53v0a.49.49,0,0,1,0,.13,3.92,3.92,0,0,1-3.51,4.14l-8.53.9a3.92,3.92,0,0,1-.8-7.8c2.85-.31,5.71-.64,8.56-.91Z"/>
                            <path class="cls-1"
                                  d="M4,61.66a3.93,3.93,0,0,1-4-3.8,3.91,3.91,0,0,1,3.8-4l8.57-.29a3.91,3.91,0,0,1,4,3.8v.06h0v.14a3.91,3.91,0,0,1-3.8,3.84h-.15L4,61.66Z"/>
                            <path class="cls-1"
                                  d="M14.26,18.5a3.92,3.92,0,0,1,5.33-5.75l6.28,5.85a4,4,0,0,1,1.25,2.73,3.9,3.9,0,0,1-1,2.81,4,4,0,0,1-2.73,1.25,3.9,3.9,0,0,1-2.81-1L14.26,18.5Z"/>
                            <path class="cls-2"
                                  d="M30.62,75.16a36.3,36.3,0,0,1-2.47-4.44,35.56,35.56,0,0,1-3.55-15.4c.12-12.94,7.45-24.93,19.63-29.88a33.76,33.76,0,0,1,15.86-2.27A36.61,36.61,0,0,1,75.23,28,31.27,31.27,0,0,1,88.45,43,33.22,33.22,0,0,1,91,54.65a33.6,33.6,0,0,1-2.57,13.67c-3,7.43-10,15.38-14.6,22.69-1-.19-5.66.71-7,.9l9.43-32.79a1.76,1.76,0,1,0-3.38-1L63,92.49l-9.36,1.39L43.75,62.45a1.75,1.75,0,0,0,1.85-.83l7-11.93,3.57,8.19a1.75,1.75,0,0,0,2.3.91,1.78,1.78,0,0,0,.93-1h0l3.16-8,3.7,9.76a1.75,1.75,0,0,0,3.28-1.24l-5.27-13.9A1.76,1.76,0,0,0,61,44.35L57.7,52.62l-3.26-7.48a1.71,1.71,0,0,0-.72-.81,1.74,1.74,0,0,0-2.39.62l-8.52,14.5-.61-1.93a1.74,1.74,0,1,0-3.33,1L50.13,94.4l-6.78,1A47.39,47.39,0,0,0,40,87.74c-2.71-4.89-6.36-7.94-9.37-12.58Z"/>
                        </svg>
                    @endif
                </div>

                <div class="flex mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-14 h-14">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>

                    <span>
                       {{$count}} Bime
                    </span>

                </div>
            </section>
        </div>

        <div class="mt-12">


            <div>
                <p>
                    Count: {{ $count }}
                    Smoke: {{ $smoke }}
                    Led: {{ $led }}
                </p>
            </div>


            <x-primary-button
                wire:click="toggleBuzzer">
                Buzzer
            </x-primary-button>

            <x-primary-button
                wire:click="toggleLed">
                Led
            </x-primary-button>


            <x-primary-button
                wire:click="toggleSmoke">
                Smoke
            </x-primary-button>

            <x-primary-button
                wire:click="toggleFire">
                Fire
            </x-primary-button>

            <x-primary-button
                wire:click="toggleHumidity">
                Humidity
            </x-primary-button>


            <x-primary-button
                wire:click="">
                Numrin e Bimeve
            </x-primary-button>

            <x-primary-button
                wire:click="increment">
                +
            </x-primary-button>

            <x-primary-button
                wire:click="decrement">
                -
            </x-primary-button>
        </div>
    </div>
</div>