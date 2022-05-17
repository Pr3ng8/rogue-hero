<x-app-layout>
    <style>
        .welcome-text {
            position: relative;
        }

        img {
            position: absolute;
            left: 60%;
            top: 5%;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            clip-path: polygon(55% 0, 80% 12%, 100% 21%, 100% 100%, 70% 100%, 23% 85%, 0 76%, 0 44%, 0 0);
        }
    </style>
    <div class="welcome-text">
        <p>Üdvözül</p>
        <p>Újra</p>
        <p class="text-red">A</p>
        <p>Rogue <span class="hero">Hero</span> Játék</p>
        <img src="{{ asset('images/jatekos.png')}}" alt="Girl in a jacket">
    </div>
</x-app-layout>
