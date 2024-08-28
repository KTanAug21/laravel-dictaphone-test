<div class="bg-amber-500 bg-center">
    <section class="main-controls bg-amber-500">
        <canvas class="visualizer" height="60px"></canvas>
        <div id="buttons">
          <button class="record btn btn-blue">Record</button>
          <button class="stop btn btn-red" onClick="uploadChunks()">Stop</button>
        </div>
    </section>

    <section class="sound-clips">
        @foreach( $recordingList as $record )
          <livewire:recording 
            :record=$record 
            wire:key="{{ $record['name'] }}"/>
        @endforeach
    </section>

    @asset
    @vite('resources/js/dictaphone.js')
    @endasset

    @script
    <script>
      // Set up basic variables for app
      connect( $wire,
        document.querySelector(".record"),
        document.querySelector(".stop"),
        document.querySelector(".sound-clips"),
        document.querySelector(".visualizer"),
        document.querySelector(".main-controls"),
        document.querySelector('input[type="file"]')
      );
    </script>
    @endscript
</div>
