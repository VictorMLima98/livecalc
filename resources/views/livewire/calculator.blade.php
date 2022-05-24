<div class="flex h-screen">
    <div class="text-gray-100 m-auto bg-slate-800">
        <div class="border-2 rounded-lg w-full">
            <div class="grid grid-cols-1 grid-rows-2 gap-y-8 text-xl font-light text-right py-8 px-4">
                <span class="tracking-wider text-xl">
                    {{ $sentence }}
                </span>
                <span class="tracking-widest text-4xl">
                    {{ $total }}
                </span>
            </div>
            <div class="grid grid-cols-4 grid-rows-5 text-xl font-light text-center">
                <x-button wire:click="clear" text="C" class="border-[1px] font-bold" />
                <x-button text="+/-" class="border-[1px] font-bold" />
                <x-button text="%" class="border-[1px] font-bold" />
                <x-button wire:click="operation('/')" text="/" class="border-[1px] font-bold" />
                <x-digit number="7" />
                <x-digit number="8" />
                <x-digit number="9" />
                <x-button wire:click="operation('*')" text="*" class="border-[1px] font-bold" />
                <x-digit number="4" />
                <x-digit number="5" />
                <x-digit number="6" />
                <x-button wire:click="operation('-')" text="-" class="border-[1px] font-bold" />
                <x-digit number="1" />
                <x-digit number="2" />
                <x-digit number="3" />
                <x-button wire:click="operation('+')" text="+" class="border-[1px] font-bold" />
                <x-digit number="0" />
                <x-button text="." />
                <x-button wire:click="erase" text="del"/>
                <x-button wire:click="calculate" text="=" class="border-[1px] font-bold" />
            </div>
        </div>
    </div>
</div>
