<div class="contact-form-wrapper mt-10">
    <div class="lg:container mx-auto">
        <div class="grid grid-cols-1">
            <div class="contact-form-right">
                @if (session()->has('success_message'))
                    <div class="alert alert-success text-white px-5 py-3 rounded align-middle flex justify-between bg-green-300 mb-5">
                        <span class="text-white text-2xl">{{ session('success_message') }}</span>
                        <span class=" cursor-pointer" wire:click="removeAlert">x</span>
                    </div>
                @endif
                <form wire:submit.prevent="sendMessage">
                    @csrf
                    <div class="mb-5">
                        <input type="text" class="w-full p-3 border-2 border-gray-200 rounded @error('name') focus:outline-none border-red-700 @enderror " wire:model.lezy="name" placeholder="Name" />
                        @error('name') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-5">
                        <input type="email" class="w-full p-3 border-2 border-gray-200 rounded @error('email') focus:outline-none border-red-700 @enderror" wire:model.lezy="email" placeholder="Email" />
                        @error('email') <span class="error text-red-700">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-5">
                        <textarea class="w-full p-3 border-2 border-gray-200 rounded" wire:model.lezy="message" placeholder="Message..." ></textarea>
                    </div>
                    <button class="px-10 h-15 py-3 border-gray-300 border-2 rounded font-semibold text-xl text-gray-300" type="submit" >Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
