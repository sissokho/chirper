<x-layout>
    <x-slot:title>
        Edit Chirp
    </x-slot:title>
    <div class="mx-auto max-w-2xl">
        <h1 class="mt-8 text-3xl font-bold">Edit Chirp</h1>

        <div class="card bg-base-100 mt-8">
            <div class="card-body">
                <form method="POST" action="/chirps/{{ $chirp->id }}">
                    @csrf
                    @method ('PUT')

                    <div class="form-control w-full">
                        <textarea
                            name="message"
                            class="textarea textarea-bordered w-full resize-none @error('message') textarea-error @enderror"
                            rows="4"
                            maxlength="255"
                            required
                            >{{ old('message', $chirp->message) }}</textarea
                        >

                        @error ('message')
                            <div class="label">
                                <span
                                    class="label-text-alt text-error"
                                    >{{ $message }}</span
                                >
                            </div>
                        @enderror
                    </div>

                    <div class="card-actions mt-4 justify-between">
                        <a href="/" class="btn btn-ghost btn-sm"> Cancel </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Update Chirp
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
