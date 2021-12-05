<div class="contact-form-wrapper mt-10">
    <div class="lg:container mx-auto">
        <div class="grid grid-cols-1">
            <div class="contact-form-right">
                <form wire:submit.prevent="sendMessage">
                    {{$name}}
                    <input type="text" class="w-full p-3 border-2 border-gray-200 rounded mb-5" wire:model.lezy="name" placeholder="Name" />
                    <input type="email" class="w-full p-3 border-2 border-gray-200 rounded mb-5" wire:model.lezy="email" placeholder="Email" />
                    <textarea class="w-full p-3 border-2 border-gray-200 rounded mb-5" wire:model.lezy="message" placeholder="Message..." ></textarea>
                    <button class="px-10 h-15 py-3 border-gray-300 border-2 rounded font-semibold text-xl text-gray-300" type="submit" >Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
