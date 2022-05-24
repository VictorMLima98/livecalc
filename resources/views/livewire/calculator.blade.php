<div class="flex h-screen">
    <div class="m-auto bg-black border-2 rounded-xl text-apple-light-gray">
            <div class="grid grid-cols-1 grid-rows-2 px-4 py-8 text-xl font-light text-right gap-y-8">
                <span class="text-2xl tracking-wider">
                    {{ $sentence }}
                </span>
                <span class="text-6xl tracking-widest">
                    {{ $total }}
                </span>
            </div>
            <div class="grid items-center content-center w-full grid-cols-4 grid-rows-5 gap-4 p-6 text-4xl text-center">
                <x-button wire:click="clear" text="C" class="text-black bg-apple-dark-gray" />
                <x-button text="±" class="text-black bg-apple-dark-gray" />
                <x-button text="%" class="text-black bg-apple-dark-gray" />
                <x-button wire:click="operation('/')" text="÷" class="text-white bg-apple-orange !text-2xl" />
                <x-digit number="7" />
                <x-digit number="8" />
                <x-digit number="9" />
                <x-button wire:click="operation('*')" text="✕" class="text-white bg-apple-orange" />
                <x-digit number="4" />
                <x-digit number="5" />
                <x-digit number="6" />
                <x-button wire:click="operation('-')" text="-" class="text-white bg-apple-orange" />
                <x-digit number="1" />
                <x-digit number="2" />
                <x-digit number="3" />
                <x-button wire:click="operation('+')" text="+" class="text-white bg-apple-orange" />
                <x-digit class="col-span-2 !text-left" number="0" />
                <x-digit number="," />
                <x-button wire:click="calculate" text="=" class="text-white bg-apple-orange" />
            </div>
    </div>
</div>
