<x-dashboard>
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                @isset($header)
                {{$header}}
                @endisset
                <!-- PAGE-HEADER END -->
                <div class="bg-white py-3 px-3 rounded-1">
                    <main>
                        {{$slot}}
                    </main>
                </div>
            </div>
            <!-- CONTAINER END -->
        </div>
    </div>
</x-dashboard>